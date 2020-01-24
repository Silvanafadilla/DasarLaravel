<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->string('hobi');
            $table->text('alamat');
            $table->string('no_tlp')->unique();
            $table->string('makanan_favorit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
