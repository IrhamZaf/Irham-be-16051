<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moviesapi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('duration');
            $table->integer('views');
            $table->string('poster'); // URL of the image
            $table->decimal('overallrating');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moviesapi');
    }
};
