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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();
            $table->text('presentation')->nullable();
            $table->text('video_url')->nullable();
            $table->text('image')->nullable();
            $table->text('image_slider')->nullable();
            $table->text('image_background')->nullable();
            $table->text('image_big')->nullable();
            $table->text('content')->nullable();
            $table->text('presentation_url')->nullable();
            $table->text('canonical')->nullable();
            $table->text('schema_main')->nullable();
            $table->text('schema_faq')->nullable();
            $table->integer('status')->default(1);
            $table->integer('show_on_main_page')->default(1);
            $table->integer('order')->nullable();
            $table->integer('order_dump')->nullable();
            $table->integer('show_page')->default(0);
            $table->integer('service_menu_item_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
