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
            $table->text('cloud');
            $table->text('task');
            $table->text('purpose');
            $table->text('deliverables');
            $table->text('version');
            $table->text('lod');
            $table->text('loi');
            $table->text('accuracy');
            $table->text('downtime');
            $table->text('possibility');
            $table->text('reports');
            $table->text('comment')->nullable();
            $table->json('files')->nullable();
            $table->text('link')->nullable();
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
