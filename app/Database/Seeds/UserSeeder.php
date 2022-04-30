<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email'             => 'pasusjhonlin@gmail.com',
            'username'          => 'akangtuser',
            'employee_id'       => '0101.00.0001',
            'full_name'         => 'Akang Tuser',
            'password'          => 'Developer@jssonline99',
            'active'            => 1
        ];

        $userModel = model(UserModel::class);
        $user = new User($data);
        $userModel->withGroup('superadmin');
        $userModel->save($user);
    }
}
