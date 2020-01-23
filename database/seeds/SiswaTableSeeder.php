<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = [
            ['nama'=>'Lulu', 'nis'=>'98765432', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung', 'tgl_lahir'=>'2003-06-01', 'umur'=>16],
            ['nama'=>'Dani', 'nis'=>'98543216', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Cibiru', 'tgl_lahir'=>'2001-09-10', 'umur'=>18],
            ['nama'=>'Dudung', 'nis'=>'98870917', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Garut', 'tgl_lahir'=>'2002-01-01', 'umur'=>17],
            ['nama'=>'Asep', 'nis'=>'98123456', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Cicadas Pangeran', 'tgl_lahir'=>'2003-06-22', 'umur'=>16],
            ['nama'=>'Nina', 'nis'=>'98333120', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung', 'tgl_lahir'=>'2003-05-01', 'umur'=>16]
        ];

        //masukan data ke database
        DB::table('siswa')->insert($siswa);

    }
}
