<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    //
    public function index(){
        $tabungan = App\Tabungan::all();
        return $tabungan;
    }
}
