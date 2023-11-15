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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('bg_image')->nullable();
            $table->string('date')->nullable();
            $table->integer('show_status')->default(1);
            $table->integer('recommend')->default(0);
            $table->text('content')->nullable();
            $table->text('canonical')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
