<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$MoZUaJZSKZuxIGdFJ7ABxeV2h.LldZYEKxjfXQ8hMOJgyUqTAB36O',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2019-10-24 21:52:31',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
