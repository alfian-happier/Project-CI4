<?php

namespace App\Controllers\Agent;

use App\Controllers\BaseController;
use App\Models\NasabahModel;

class AgentHomeController extends BaseController
{
    private $NasabahModel;

    public function __construct()
    {
        $this->NasabahModel = new NasabahModel();
    }

    public function index()
    {
        $data['data_nasabah'] = $this->NasabahModel->findAll();

        return view('Agent/list', $data);
    }

    public function create()
    {
        return view('Agent/create');
    }


    public function store()
    {
        if ($this->request->getMethod() === 'post') {
            // Ambil data dari form
            $data = [
                'nama_nasabah' => htmlspecialchars($this->request->getPost('nama_nasabah')),
                'periode_pertanggungan' => htmlspecialchars($this->request->getPost('periode_pertanggungan')),
                'pertanggungan_kendaraan' => htmlspecialchars($this->request->getPost('pertanggungan_kendaraan')),
                'harga_pertanggungan' => htmlspecialchars($this->request->getPost('harga_pertanggungan')),
                'jenis_pertanggungan' => (int)$this->request->getPost('jenis_pertanggungan'), // Konversi ke int
                'risiko_banjir' => $this->request->getPost('risiko_banjir') ? true : false, // Konversi ke boolean
                'risiko_gempa' => $this->request->getPost('risiko_gempa') ? true : false, // Konversi ke boolean
            ];

            // Simpan data ke database
            $this->NasabahModel->insert($data);

            // Redirect atau tampilkan pesan sukses
            return redirect()->to('Agent/list')->with('success', 'Data Berhasil Ditambahkan.');
        }

        // Tampilkan form tambah data
        return view('Agent/list');
    }
}
