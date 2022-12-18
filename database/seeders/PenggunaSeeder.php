<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::create([
            'nama' => 'fulan',
            'nik'    => '1050245708900001',
            'password' => 'a',
            'alamat' => 'a',
            'tanggalLahir' => '2002-12-09',
            'jenisKelamin' => 1,
            'role' => 1,
        ]);
    }
}
