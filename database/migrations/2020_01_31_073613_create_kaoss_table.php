<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaoss', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_kaos')->unique();
            $table->string('merk_kaos');
            $table->string('warna_kaos');
            $table->string('size_kaos');
            $table->string('bahan_kaos');
            $table->integer('harga_kaos');            
            $table->string('jenis_kaos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kaoss');
    }
}
