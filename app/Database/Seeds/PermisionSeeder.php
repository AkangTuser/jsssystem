<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermisionSeeder extends Seeder
{
    public function run()
    {
        $data =
            [
                [
                    'name' => 'manage-role',
                    'description'    => 'Manage All Role'
                ],
                [
                    'name' => 'manage-menu',
                    'description'    => 'Manage All Menu'
                ],
                [
                    'name' => 'manage-user',
                    'description'    => 'Manage All User'
                ],
                [
                    'name' => 'manage-profile',
                    'description'    => 'Manage User Profile'
                ]
            ];

        $this->db->table('auth_permissions')->insertBatch($data);
    }
}
