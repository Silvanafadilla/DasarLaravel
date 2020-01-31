<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kaos;

class KaosController extends Controller
{
    public function index(){
        $data = Kaos::all();
        return view('kaos1',compact('data'));
    }

    public function index1($id){
        $data = Kaos::findOrFail($id);
        return view('kaos2',compact('data'));
    }
}
