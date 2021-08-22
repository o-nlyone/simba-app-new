<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs');
            $table->bigInteger('nim')->unique();
            $table->string('notelp_mhs');
            $table->enum('jurusan', ['TI', 'SI']);
            $table->bigInteger('angkatan');
            $table->enum('status_mhs', ['aktif', 'nonaktif', 'cuti', 'lulus'])->default('aktif');
            $table->enum('mhs_spesial', ['tidak', 'mhs_binaan1', 'mhs_binaan2'])->default('tidak');
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
        Schema::dropIfExists('mahasiswas');
    }
}
