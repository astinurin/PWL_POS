<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'C1',
                'kategori_nama' => 'Food',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'C2',
                'kategori_nama' => 'Beverages',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'C3',
                'kategori_nama' => 'Dessert',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'C4',
                'kategori_nama' => 'Snack',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'C5',
                'kategori_nama' => 'Appetizer',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}