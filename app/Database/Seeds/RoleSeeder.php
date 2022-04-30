<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data =
            [
                [
                    'name' => 'superadmin',
                    'description'    => 'Super Administrator can do anything',
                ],
                [
                    'name' => 'admin',
                    'description'    => 'Administrator can Add, Edit, Delete, and View All data'
                ],
                [
                    'name' => 'operator',
                    'description'    => 'Operator can Edit, and View All data and can not Delete'
                ],
                [
                    'name' => 'pimpinan',
                    'description'    => 'Pimpinan can view All data and profile'
                ],
                [
                    'name' => 'karyawan',
                    'description'    => 'Karyawan can view self data and profile'
                ],
                [
                    'name' => 'guests',
                    'description'    => 'Penggunjung can view self profile'
                ],
            ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}
