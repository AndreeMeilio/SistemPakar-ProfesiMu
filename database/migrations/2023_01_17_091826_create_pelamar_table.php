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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('nama_lengkap', 100);
            $table->string('foto', 100);
            $table->string('email', 100);
            $table->string('no_telp', 16);
            $table->date('tanggal_lahir');
            $table->string('domisili', 100);
            $table->string('institusi', 100);
            $table->string('program_studi', 100);
            $table->string('pendidikan_terakhir', 100)->nullable();
            $table->string('semester_saat_ini', 100)->nullable();
            $table->string('pengalaman_kerja', 100)->nullable();
            $table->integer('ekspektasi_pendapatan')->nullable();
            $table->string('cv_resume', 100);
            $table->string('dokumen_lainnya', 100)->nullable();
            $table->text('informasi_tambahan')->nullable();
            $table->integer('id_lowongan');
            $table->string('status_potensi', 16)->nullable();
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
        Schema::dropIfExists('pelamar');
    }
};
