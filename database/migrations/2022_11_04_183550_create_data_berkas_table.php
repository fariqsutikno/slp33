<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_berkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('data_siswa');
            $table->string('photoWhiteBG')->nullable();
            $table->string('KTP')->nullable();
            $table->string('KTPArab')->nullable();
            $table->string('akte')->nullable();
            $table->string('akteArab')->nullable();
            $table->string('KK')->nullable();
            $table->string('surkes')->nullable();
            $table->string('surkesArab')->nullable();
            $table->string('SKKB')->nullable();
            $table->string('tazkiyah')->nullable();
            $table->string('SKCK')->nullable();
            $table->string('SKCKArab')->nullable();
            $table->string('paspor')->nullable();
            $table->string('ijazahIM')->nullable();
            $table->string('ijazahMA')->nullable();
            $table->string('transkripIjazahIM')->nullable();
            $table->string('transkripIjazahMA')->nullable();
            $table->string('raporMA')->nullable();
            $table->string('raporIM')->nullable();
            $table->string('rapor1AIM')->nullable();
            $table->string('rapor1BIM')->nullable();
            $table->string('rapor2AIM')->nullable();
            $table->string('rapor2BIM')->nullable();
            $table->string('rapor3AIM')->nullable();
            $table->string('rapor3BIM')->nullable();
            $table->string('rapor1AMA')->nullable();
            $table->string('rapor1BMA')->nullable();
            $table->string('rapor2AMA')->nullable();
            $table->string('rapor2BMA')->nullable();
            $table->string('rapor3AMA')->nullable();
            $table->string('rapor3BMA')->nullable();
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
        Schema::dropIfExists('data_berkas');
    }
}
