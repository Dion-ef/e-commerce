<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                'name'=>'Aji',
                'alamat'=>'Trenggalek',
                'no'=>'0876545356',
                'level'=>'admin',
                'email'=>'aji1@gmail.com',
                'password'=>bcrypt('admin123')
            ],
            [
                'name'=>'Hadi',
                'alamat'=>'Trenggalek',
                'no'=>'0870987876',
                'level'=>'pembeli',
                'email'=>'hadi2@gmail.com',
                'password'=>bcrypt('hadi456')
            ],
        ];

        foreach($user as $key => $val){
            User::create($val);
        }
    }
}
