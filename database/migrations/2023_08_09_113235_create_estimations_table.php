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
            $table->text('disciplines');
            $table->text('units');
            $table->text('language');
            $table->text('type');
            $table->text('area');
            $table->text('height');
            $table->text('data');
            $table->text('incoming_point_cloud');
            $table->text('task_for_modeling');
            $table->text('revit_version');
            $table->text('lod');
            $table->text('loi');
            $table->text('project_accuracy');
            $table->text('deliverables');
            $table->text('comment')->nullable();
            $table->text('reference')->nullable();
            $table->json('files')->nullable();
            $table->text('cloud_link')->nullable();

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
