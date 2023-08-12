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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('nama', 100);
            $table->integer('id_tipe_pekerjaan');
            $table->text('deskripsi');
            $table->text('persyaratan');
            $table->integer('id_departemen');
            $table->string('lokasi', 100);
            $table->date('tanggal_dibuka');
            $table->date('tanggal_ditutup');
            $table->string('slug', 100);
            $table->boolean('status_aktif')->default(false);
            $table->integer('id_admin_updated')->nullable();
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
        Schema::dropIfExists('lowongan');
    }
};
