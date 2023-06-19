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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->text('title_first')->nullable();
            $table->text('title_second')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('disciplines')->nullable();
            $table->text('parameter_1')->nullable();
            $table->text('parameter_2')->nullable();
            $table->text('parameter_3')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('image_small')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
