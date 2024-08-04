<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Lakukan pengecekan otentikasi
        $session = session();

        // Jika session pengguna tidak ada, arahkan ke halaman login
        if (!$session->has('id')) {
            return redirect()->to(base_url('login'));
        }

        // Pengecekan role untuk mengakses halaman Agent
        if ($request->uri->getSegment(1) === 'Agent' && $session->get('role') !== 'Agent') {
            return redirect()->to(base_url('Agent/list'));
        }

        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Lakukan tindakan setelah eksekusi controller, jika diperlukan
        return $response;
    }
}
