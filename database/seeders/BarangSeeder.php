<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'F1',
                'barang_nama' => 'Chicken Wings',
                'harga_beli' => 50000, // Rp 50.000
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'F2',
                'barang_nama' => 'Caesar Salad',
                'harga_beli' => 40000, // Rp 40.000
                'harga_jual' => 80000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'B1',
                'barang_nama' => 'Iced Tea',
                'harga_beli' => 15000, // Rp 15.000
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'B2',
                'barang_nama' => 'Mango Smoothie',
                'harga_beli' => 25000, // Rp 25.000
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'D1',
                'barang_nama' => 'Chocolate Lava Cake',
                'harga_beli' => 75000, // Rp 75.000
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'D2',
                'barang_nama' => 'Tiramisu',
                'harga_beli' => 60000, // Rp 60.000
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'S1',
                'barang_nama' => 'Nachos',
                'harga_beli' => 30000, // Rp 30.000
                'harga_jual' => 60000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'S2',
                'barang_nama' => 'Popcorn',
                'harga_beli' => 10000, // Rp 10.000
                'harga_jual' => 20000, 
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'A1',
                'barang_nama' => 'Mozzarella Sticks',
                'harga_beli' => 40000, // Rp 40.000
                'harga_jual' => 80000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'A2',
                'barang_nama' => 'Spinach Artichoke Dip',
                'harga_beli' => 45000, // Rp 45.000
                'harga_jual' => 90000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
