<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'name'=>'Abidzar Giffari',
                'email'=>'abidzar.fathoni321@gmail.com',
                'nim'=>'1227050001',
                'role'=>'user',
                'password'=>bcrypt('')
            ],
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'nim'=>'1227050002',
                'role'=>'admin',
                'password'=>bcrypt('')
            ],
        ];

        foreach($userdata as $key => $val){
            User::create($val);
        }

    }
}
