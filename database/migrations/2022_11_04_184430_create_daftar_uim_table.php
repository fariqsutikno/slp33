<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarUimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_uim', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('musyrif_id');
            $table->foreign('siswa_id')->references('id')->on('data_siswa');
            $table->foreign('musyrif_id')->references('id')->on('musyrif_daftar_uim');
            $table->string('jadwalDidaftarkan')->nullable();
            $table->string('selesaiDidaftarkan')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('daftar_uim');
    }
}
