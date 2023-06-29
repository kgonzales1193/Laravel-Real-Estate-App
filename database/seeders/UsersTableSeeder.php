<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin123**'),
                'role' => 'admin',
                'status' => 'active',
                
            ],
            //Agent
            [
                'name' => 'John Doe',
                'username' => 'jdoe',
                'email' => 'jdoe@mail.com',
                'password' => Hash::make('agent123**'),
                'role' => 'agent',
                'status' => 'active',
                
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'jsmith',
                'email' => 'jsmith@mail.com',
                'password' => Hash::make('user123**'),
                'role' => 'user',
                'status' => 'active',
                
            ],
        ]);
    }
}
