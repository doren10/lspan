<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
         Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data Siswa
        Siswa::create([
            'id' => '20208779',
            'nama' => 'Aan Alfiansyah',
            'kelas' => 'XII',
        ]);
        Siswa::create([
            'id' => '20202020',
            'nama' => 'Arroyan Fastabiqul Koirot',
            'kelas' => 'X',
        ]);
        Siswa::create([
            'id' => '20202030',
            'nama' => 'Edris Prayoto',
            'kelas' => 'XI',
        ]);
       
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}