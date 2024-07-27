<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKategoriseeder extends Seeder
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
                'nama_kategori'=>'LENOVO',
            ],
            [
                'nama_kategori'=>'ASUS',
            ],
            [
                'nama_kategori'=>'SAMSUNG',
            ],
        ];

        foreach($user as $key => $val){
            kategori::create($val);
        }
    }
}