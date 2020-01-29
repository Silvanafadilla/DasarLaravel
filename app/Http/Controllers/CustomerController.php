<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    //
    public function index(){
        $cus = Customer::all();
        return $cus;
    }

    public function show($id){
        $cus = Customer::find($id);
        return $cus;
    }

    public function store($cc, $nama, $email, $city, $country, $address, $contact){
        $cus = new Costumer;
        $cus->code_customer = $cc;
        $cus->name = $nama;
        $cus->email = $email;
        $cus->city = $city;
        $cus->country = $country;
        $cus->address = $address;
        $cus->contant = $contact;
        $cus->save();
        return $cus;
    }

    public function update($id, $cc, $nama, $email, $city, $country, $address, $contact){
        $cus = Costumer::find($id);
        $cus->code_customer = $cc;
        $cus->name = $nama;
        $cus->email = $email;
        $cus->city = $city;
        $cus->country = $country;
        $cus->address = $address;
        $cus->contant = $contact;
        $cus->save();
        return $cus;
    }

    public function delete($id){
        $cus = Costumer::find($id);
        $cus->delete();
        return $cus;
    }
}
