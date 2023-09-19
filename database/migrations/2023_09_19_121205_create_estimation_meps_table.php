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
        Schema::create('estimation_meps', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->text('type');
            $table->text('language');
            $table->text('units');
            $table->json('disciplines');
            $table->json('services');
            $table->text('lod');
            $table->json('data');
            $table->text('version');
            $table->json('coordination_software')->nullable();
            $table->text('fabrication_software')->nullable();
            $table->text('duration');
            $table->text('draftsmen')->nullable();
            $table->text('modelers')->nullable();
            $table->text('coordinators')->nullable();
            $table->text('managers')->nullable();
            $table->json('deliverables');
            $table->text('downtime');
            $table->text('decisions');
            $table->text('reports')->nullable();
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
        Schema::dropIfExists('estimation_meps');
    }
};
