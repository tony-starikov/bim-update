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
        Schema::create('service_blocks', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->text('name');
            $table->text('background_image')->nullable();
            $table->integer('show_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_blocks');
    }
};
