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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->text('slug')->nullable();
            $table->text('description_en')->nullable();
            $table->text('image')->nullable();
            $table->text('file')->nullable();
            $table->integer('show_status')->default(1);
            $table->integer('recommend')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
