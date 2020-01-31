<?php

use Illuminate\Database\Seeder;

class KaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kaos = [
            ['code_kaos'=>'S4321', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'B6578', 'merk_kaos'=>'Barcelona', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>500000, 'jenis_kaos'=>'pendek'],
            ['code_kaos'=>'H9872', 'merk_kaos'=>'Huf', 'warna_kaos'=>'putih', 'size_kaos'=>'M', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>350000, 'jenis_kaos'=>'pendek'],
            ['code_kaos'=>'S6512', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'army', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>200000, 'jenis_kaos'=>'pendek'],
            ['code_kaos'=>'E7890', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'G4531', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'S8881', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'S1121', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'S9991', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang'],
            ['code_kaos'=>'S231', 'merk_kaos'=>'Uniqlo', 'warna_kaos'=>'putih', 'size_kaos'=>'L', 'bahan_kaos'=>'cotton combed 30s', 'harga_kaos'=>700000, 'jenis_kaos'=>'panjang']
        ];

        DB::table('kaoss')->insert($kaos);
    }
}

