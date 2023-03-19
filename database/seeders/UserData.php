<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=> "abm",
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'phone'=>'0193323445',
                'role'=>'admin',
                'status'=>'active',
                'password'=> Hash::make('12345678'),
            ],
            [
                'name'=> "vendor",
                'username'=>'vendor',
                'email'=>'vendor@gmail.com',
                'phone'=>'0193323445',
                'role'=>'vendor',
                'status'=>'active',
                'password'=> Hash::make('12345678'),
            ],
            [
                'name'=> "user",
                'username'=>'user',
                'email'=>'user@gmail.com',
                'phone'=>'0193323445',
                'role'=>'user',
                'status'=>'active',
                'password'=> Hash::make('12345678'),
            ],
        ]);
    }
}
