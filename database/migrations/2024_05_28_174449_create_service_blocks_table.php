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
            $table->integer('type_id')->nullable();
            $table->text('name')->nullable();
            $table->text('template')->nullable();
            $table->integer('show_status')->default(1);
            $table->integer('order')->nullable();
            $table->integer('order_dump')->nullable();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
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
