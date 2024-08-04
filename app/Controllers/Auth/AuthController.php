<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class AuthController extends BaseController
{
    protected $UsersModel;
    protected $helpers = ['form', 'session'];

    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        return view('login');
    }

    public function processLogin()
    {
        // Validasi input email dan password
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        if (!$this->validate($validation->getRules())) {
            // Corrected to get the validation errors properly
            return redirect()->to('login')->withInput()->with('errors', $validation->getErrors());
        }

        // Cari user berdasarkan email
        $users = $this->UsersModel->where('email', $this->request->getPost('email'))->first();

        if ($users) {
            // Verifikasi password
            if (password_verify($this->request->getPost('password'), $users['password'])) {
                // Set session user
                session()->set([
                    'id'    => $users['id'],
                    'email' => $users['email'],
                    'role'  => $users['role']
                ]);

                // Redirect ke dashboard sesuai role
                switch ($users['role']) {
                    case 'Agent':
                        return redirect()->to('Agent/list')->with('message', 'Selamat datang, ' . $users['email']);
                    default:
                        return redirect()->to('login')->with('message', 'Role tidak valid');
                }
            } else {
                // Password salah
                return redirect()->to('login')->with('error', 'Password salah');
            }
        } else {
            // Pengguna tidak ditemukan
            return redirect()->to('login')->with('error', 'Email tidak ditemukan');
        }
    }
}
