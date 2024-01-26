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
        Schema::create('estimation_scan_shorts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->json('disciplines');
            $table->text('type');
            $table->text('area');
            $table->text('height');
            $table->json('task');
            $table->json('lod');
            $table->text('accuracy');
            $table->text('currency');
            $table->text('start')->nullable();
            $table->text('address')->nullable();
            $table->text('link')->nullable();
            $table->text('comment')->nullable();
            $table->json('files')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimation_scan_shorts');
    }
};
