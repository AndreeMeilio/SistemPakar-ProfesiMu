<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ProfessionCategories;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100);
            $table->string('profession_name', 100);
            $table->enum('category', ProfessionCategories::databaseEnum());
            $table->text('description');
            $table->text('responsibility');
            $table->text('skill');
            $table->json('learning_resources');
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
        Schema::dropIfExists('professions');
    }
};
