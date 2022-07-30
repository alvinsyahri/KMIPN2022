<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('kelamin');
            $table->string('darah',2)->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt',3)->nullable();
            $table->string('rw',3)->nullable();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('agama');
            $table->string('perkawinan');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('penduduks');
    }
};
