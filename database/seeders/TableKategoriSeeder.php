<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'nama' => 'Makanan',
            'deskripsi' => 'Makanan khas Indonesia',
        ],
            [
            'nama' => 'Minuman',
            'deskripsi' => 'Minuman khas Indonesia',
            ],
        ];

        foreach($data as $item){
            Kategori::create($item);
        }
    }
}
