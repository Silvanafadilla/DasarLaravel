<?php

use Illuminate\Database\Seeder;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
        ['nama'=>'Lulu', 'tgl_lahir'=>'2003-06-01', 'umur'=>16, 'hobi'=>'makan', 'alamat'=>'Bandung', 'no_tlp'=>'08965748923', 'makanan_favorit'=>'mie'],
        ['nama'=>'Dani', 'tgl_lahir'=>'2001-04-12', 'umur'=>18, 'hobi'=>'futsal', 'alamat'=>'Bandung', 'no_tlp'=>'08509843217', 'makanan_favorit'=>'ayam goreng'],
        ['nama'=>'Dadang', 'tgl_lahir'=>'2003-01-01', 'umur'=>16, 'hobi'=>'tidur', 'alamat'=>'Jakarta', 'no_tlp'=>'08263547899', 'makanan_favorit'=>'tahu'],
        ['nama'=>'Nani', 'tgl_lahir'=>'2003-10-03', 'umur'=>16, 'hobi'=>'duduk', 'alamat'=>'Subang', 'no_tlp'=>'08838732875', 'makanan_favorit'=>'tempe'],
        ['nama'=>'Siska', 'tgl_lahir'=>'2001-05-07', 'umur'=>18, 'hobi'=>'berenang', 'alamat'=>'Garut', 'no_tlp'=>'08976582534', 'makanan_favorit'=>'sushi'],
        ['nama'=>'Toni', 'tgl_lahir'=>'2001-09-09', 'umur'=>18, 'hobi'=>'game', 'alamat'=>'Bandung', 'no_tlp'=>'08762143672', 'makanan_favorit'=>'sphagetti'],
        ['nama'=>'Jeni', 'tgl_lahir'=>'2002-12-01', 'umur'=>17, 'hobi'=>'masak', 'alamat'=>'Bandung', 'no_tlp'=>'08963452366', 'makanan_favorit'=>'telur'],
        ['nama'=>'Angel', 'tgl_lahir'=>'2003-06-10', 'umur'=>16, 'hobi'=>'belajar', 'alamat'=>'Bandung', 'no_tlp'=>'08932444667', 'makanan_favorit'=>'jamur'],
        ['nama'=>'Tasya', 'tgl_lahir'=>'2003-02-02', 'umur'=>16, 'hobi'=>'membaca', 'alamat'=>'Kalimantan', 'no_tlp'=>'08937632799', 'makanan_favorit'=>'terong'],
        ['nama'=>'Nina', 'tgl_lahir'=>'2003-06-11', 'umur'=>16, 'hobi'=>'main hp', 'alamat'=>'Padang', 'no_tlp'=>'08936528888', 'makanan_favorit'=>'udang']
    ];

    //masukan data ke database
    DB::table('biodata')->insert($bio);
        //
    }
}
