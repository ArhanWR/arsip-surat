<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Pengumuman',
            'keterangan' => 'Surat-surat terkait pengumuman',
        ]);

        Kategori::create([
            'nama_kategori' => 'Undangan',
            'keterangan' => 'Surat undangan rapat, koordinasi, dll',
        ]);
    }
}