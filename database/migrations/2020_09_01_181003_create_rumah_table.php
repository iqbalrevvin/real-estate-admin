<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agent_id')->nullable();
            $table->unsignedInteger('tipe_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->string('tahun',4)->nullable();
            $table->string('kamar_mandi',2)->nullable();
            $table->string('ruangan',2)->nullable();
            $table->string('parkiran',2)->nullable();
            $table->string('tempat_tidur',2)->nullable();
            $table->string('garasi',2)->nullable();
            $table->string('luas_tanah',4)->nullable();
            $table->string('provinsi_id',25)->nullable();
            $table->string('kabupaten_id',25)->nullable();
            $table->string('kecamatan_id',25)->nullable();
            $table->string('kelurahan_id',25)->nullable()->nullable();
            $table->string('foto_1')->nullable();
            $table->string('foto_2')->nullable();
            $table->string('foto_3')->nullable();
            $table->string('foto_4')->nullable();
            $table->string('foto_5')->nullable();
            $table->string('link_maps')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('rumah');
    }
}
