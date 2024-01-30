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
        Schema::create('estimation_mep_shorts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->json('disciplines');
            $table->json('services');
            $table->text('lod');
            $table->json('data');
            $table->text('duration');
            $table->json('deliverables');
            $table->text('comment')->nullable();
            $table->json('files');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimation_mep_shorts');
    }
};
