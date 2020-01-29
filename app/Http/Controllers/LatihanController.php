<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function halo(){
        return 'Halo Nama Saya Sisil';
    }

    public function pertambahan($a = 0, $b = 0){
        if (isset($a) && isset($b)) {
            $c = $a+$b;
            return "$a + $b = $c";
        }else {
            return 'Tidak valid';
        }
        if (!$a or !$b) {
            echo '<br>Silahkan tambahkan satu data lagi';
        }
    }

    public function perkurangan($a = 0, $b = 0){
        $c = $a-$b;
        echo "Hasil $a - $b = " .$c;
    }

    public function pembagian($a = 0, $b = 0){
        $c = $a/$b;
        echo "Hasil $a / $b = " .$c;
    }

    public function perkalian($a = 0, $b = 0){
        $c = $a*$b;
        echo "Hasil $a x $b = " .$c;
    }

    
    public function loop(){
        $data = [
            ['Nama'=>'Hari','Kelas'=>'RPL 1','uang_jajan'=>10000]
        ];
        //dd($data);
        foreach($data as $val => $key){
            echo "Nama         : ".$key['Nama'].
                 "- Kelas      : ".$key['Kelas'].
                 "- Uang jajan : ".$key['uang jajan'].
                 "<hr>";
        }
    }

    public function latihan(){
        $data = [
            ['Nama'=>'Lala','Kelas'=>'RPL 4','uang_jajan'=>60000],
            ['Nama'=>'Dani','Kelas'=>'RPL 4','uang_jajan'=>15000],
            ['Nama'=>'Sasa','Kelas'=>'RPL 4','uang_jajan'=>25000],
            ['Nama'=>'Dodi','Kelas'=>'RPL 4','uang_jajan'=>10000],
            ['Nama'=>'Ujang','Kelas'=>'RPL 4','uang_jajan'=>30000]
        ];
        foreach ($data as $val => $key) {
            if ($key['uang_jajan'] >= 50000) {
                $tab = $key['uang_jajan']*25/100;
                $total = $key['uang_jajan']-$tab;
            }elseif ($key['uang_jajan'] >= 25000) {
                $tab = $key['uang_jajan']*15/100;
                $total = $key['uang_jajan']-$tab;
            }elseif ($key['uang_jajan'] >= 10000) {
                $tab = $key['uang_jajan']*10/100;
                $total = $key['uang_jajan']-$tab;
            }else {
                $tab = 0;
                $total = $key['uang_jajan'];
            }
            echo "Nama            : ".$key['Nama'].
                 " - Kelas         : ".$key['Kelas'].
                 " - Uang jajan    : ".$total.
                 " - Uang tabungan : ".$tab.
                 "<hr>";
        }
    }

    public function latihan2(){
        $data = [
            ['Nama'=>'Adit','Agama'=>'Islam','Alamat'=>'Bandung','jenis_kelamin'=>'Laki-laki','Jabatan'=>'Manager','Jam_kerja'=>250],
            ['Nama'=>'Soni','Agama'=>'Islam','Alamat'=>'Jakarta','jenis_kelamin'=>'Laki-laki','Jabatan'=>'Sekretaris','Jam_kerja'=>300],
            ['Nama'=>'Lulu','Agama'=>'Islam','Alamat'=>'Surabaya','jenis_kelamin'=>'Perempuan','Jabatan'=>'Staff','Jam_kerja'=>100],
        ];
        foreach ($data as $var => $key) {
            if ($key['Jabatan'] == "Manager") {
                $gaji = 5000000;
                if ($key['Jam_kerja'] >= 250) {
                    $bonus = $gaji/10;
                }
                elseif ($key['Jam_kerja'] >= 200) {
                    $bonus = $gaji*5/100;
                }
                else {
                    $bonus = 0;
                }
                $gajibersih = $gaji+$bonus;
                $ppn = $gaji*2.5/100;
                $total = $gajibersih - $potongan; 

            }if ($key['Jabatan'] == "Sekretaris") {
                $gaji = 3500000;
                if ($key['Jam_kerja'] >= 250) {
                    $bonus = $gaji/10;
                }
                elseif ($key['Jam_kerja'] >= 200) {
                    $bonus = $gaji*5/100;
                }
                else {
                    $bonus = 0;
                }
                $gajibersih = $gaji+$bonus;
                $potongan = $gajibersih*2.5/100;
                $total = $gajibersih - $potongan;

            } if ($key['Jabatan'] == "Staff") {
                $gaji = 2500000;
                if ($key['Jam_kerja'] >= 250) {
                    $bonus = $gaji/10;
                }
                elseif ($key['Jam_kerja'] >= 200) {
                    $bonus = $gaji*5/100;
                }
                else {
                    $bonus = 0;
                }
                $ppn = 0.025*$gaji;
                $total = ($gaji+$bonus) - $ppn;
            }       
            echo "Nama              : ".$key['Nama'].
                 "<br>Agama         : ".$key['Agama'].
                 "<br>Alamat        : ".$key['Alamat'].
                 "<br>Jenis Kelamin : ".$key['jenis_kelamin'].
                 "<br>Jabatan       : ".$key['Jabatan'].
                 "<br>Jam kerja     : ".$key['Jam_kerja'].
                 "<br>Gaji          : ".$gaji.
                 "<br>PPN           : ".$potongan.
                 "<br>Bonus         : ".$bonus.
                 "<br>Gaji Bersih   : ".$total.
                 "<hr>";
        }
    }
}