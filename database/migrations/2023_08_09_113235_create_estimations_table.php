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
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->json('disciplines');
            $table->text('units');
            $table->text('type');
            $table->text('area');
            $table->text('height');
            $table->json('cloud');
            $table->json('task');
            $table->json('deliverables');
            $table->text('version');
            $table->json('lod');
            $table->json('loi');
            $table->text('accuracy');
            $table->text('currency');
            $table->text('start')->nullable();
            $table->text('address')->nullable();
            $table->text('link')->nullable();
            $table->text('comment')->nullable();
            $table->json('files');
            $table->text('reference')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimations');
    }
};
