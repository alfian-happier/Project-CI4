<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UsersModel;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $usersModel = new UsersModel();

        // Contoh data yang akan dimasukkan
        $data = [
            [
                'nama' => 'Agent1',
                'email' => 'agent1@gmail.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'Agent',
            ],
            [
                'nama' => 'Agent2',
                'email' => 'agent2@gmail.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => 'Agent',
            ],
        ];

        // Memasukkan data ke database
        $usersModel->insertBatch($data);
    }
}
