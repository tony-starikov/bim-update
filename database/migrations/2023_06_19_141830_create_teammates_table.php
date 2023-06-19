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
        Schema::create('teammates', function (Blueprint $table) {
            $table->id();
            $table->text('name_en')->nullable();
            $table->text('surname_en')->nullable();
            $table->text('position_en')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teammates');
    }
};
