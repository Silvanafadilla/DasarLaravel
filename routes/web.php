<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('halo',function(){
    return 'Halo ini Aplikasi Laravel pertama saya'.
           '<br>Laravel is Magical Framework';
});

Route::get('about',function(){
    return '<h1>Halo</h1>'
          .'Selamat datang di webapp saya<br>'
          .'Laravel, emang keren.';
});

Route::get('profil/Sisil',function(){
    return 'Halo Nama Saya Silvana';
});

Route::get('kelas/XI RPL 1',function(){
    return 'Saya kelas XI RPL 1';
});
Route::get('profil/Sisil',function(){
    return 'Halo Nama Saya Silvana';
});
Route::get('umur/16',function(){
    return 'Umur Saya 16 tahun';
});

Route::get('alamat/Bandung',function(){
    return 'Alamat Saya di Bandung';
});

Route::get('biodata/{nama}',function($a){
    return 'Halo ini biodata'. $a;
});

Route::get('biodata/{nama}/{alamat}/{umur}',function($a, $b, $c){
    return 'Halo Nama Saya'. $a.
           '<br>alamat saya di '.$b.
           '<br>umur saya '.$c;
});

Route::get('name/{param?}', function($a="Sisil"){
    return 'Your name is'.$a;
});

Route::get('pesan/{makan?}/{minum?}/{harga?}',function($a=null, $b=null, $c){
    if (isset($a)) {
        echo "Anda memesan $a";
    }if (isset($b)){
        echo " & $b";
    }if (isset($c)) {
        if ($c >= 35000) {
            $e = "Size Large";
        }elseif ($c >= 25000) {
            $e = "Size Medium";
        }elseif ($c > 0) {
            $e = "Small";
        }else{
            return 'Harga tidak valid';
        }
        echo "<br>$e Dengan Harga $c";
        
    }
    if (!$a && !$b) {
        return 'Silakan memesan terlebih dahulu!';
    }
});

Route::get('tni/{nama}/{bb}/{umur}',function($a, $b, $c){
    if (isset($a)) {
        echo "Nama Anda $a";
    }if (isset($b)) {
        if ($b <= 50) {
            $bb = "Anda Kurang Nutrisi";
        }elseif ($b <= 64) {
            $bb = "Naikan Berat Badan Anda";
        }elseif ($b <= 75 ) {
            $bb = "Ideal";
        }elseif ($b <= 100 ) {
            $bb = "Anda harus Turun Berat Badan";
        }
        echo "<br>Berat Badan Anda $b : $bb ";
    }if (isset($c)) {
        if ($c <= 40) {
            $u = "Perwira";
        }elseif ($c <= 50) {
            $u = "Laksamana";
        }elseif ($c <= 60) {
            $u = "Jendral";
        }
        echo "<br>Peringkat Anda $u";

    }
    if (!$a && !$b) {
        return 'Silakan isi terlebih dahulu';
    }
});

//akses model post
Route::get('testmodel',function(){
    $query = App\Post::all();
    return $query;
});

Route::get('testmodel/1',function(){
    $query = App\Post::find(1);
    return $query;
});

Route::get('testmodel/2',function(){
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('testmodel/3',function(){
    $query = App\Post::find(1);
    $query->title = "Ciri Keluarga Sakinah";
    $query->save();
    return $query;
});

Route::get('testmodel/4',function(){
    $query = App\Post::find(1);
    $query->delete();
});

Route::get('testmodel/5',function(){
    $query = new App\Post;
    $query->title = "7 Amalan Pembuka Jodoh";
    $query->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $query->save();
    return $query;
});
Route::get('model/{param}',function($a){
    $data = App\Data::find(1);
    $data->nama = $a;
    $data->save();
    return $data;
});

Route::get('/',function(){
    return view('welcome');
});

Route::get('latihan','LatihanController@halo');
Route::get('tambah/{a?}/{b?}','LatihanController@pertambahan');
Route::get('kurang/{a?}/{b?}','LatihanController@perkurangan');
Route::get('bagi/{a?}{b?}','LatihanController@pembagian');
Route::get('kali/{a?}/{b?}','LatihanController@perkalian');
Route::get('l1','LatihanController@loop');
Route::get('l2','LatihanController@latihan');
Route::get('l3','LatihanController@latihan2');

//CRUD TABUNGAN
Route::get('tabungan','TabunganController@index');
Route::get('show/{id}','TabunganController@show');
Route::get('tabungan-tambah/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('update/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@update');
Route::get('delete/{id}','TabunganController@delete');

Route::get('customer','CustomerController@index');
Route::get('show/{id}','CustomerController@show');
Route::get('tabungan-tambah/{cc}/{nama}/{email}/{city}/{country}/{address}/{contact}','CustomerController@store');
Route::get('update/{cc}/{nama}/{email}/{city}/{country}/{address}/{contact}','CustomerController@update');
Route::get('delete/{id}','CustomerController@delete');

//PASSING DATA
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('pass2','PracticeController@pass2');
Route::get('pass3/{id}','PracticeController@pass3');
Route::get('index','KaosController@index');
Route::get('index/{id}','KaosController@index1');