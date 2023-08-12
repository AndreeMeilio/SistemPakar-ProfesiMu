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
        Schema::create('kutipan', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('nama', 100);
            $table->string('foto', 100);
            $table->text('kutipan');
            $table->string('posisi', 100);
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
        Schema::dropIfExists('kutipan');
    }
};
