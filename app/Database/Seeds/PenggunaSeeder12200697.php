<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200697;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200697 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'aurelyola',
                'password'  => md5('12200697')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200697',
                'password'  => md5('aurel_yola')
            ]
        ];

        $p = new Pengguna12200697();
        $p->insertBatch($data);
    }
}
