<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051019',
                'nama'    => 'Rifan Setiadi',
                'alamat' => 'Tangerang',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051011',
                'nama'    => 'Yudi',
                'alamat' => 'Lampung',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051023',
                'nama'    => 'Ayumna',
                'alamat' => 'Tangerang',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051054',
                'nama'    => 'Angel',
                'alamat' => 'Lampung',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ]
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
