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
        Schema::create('slide_shows', function (Blueprint $table) {
            $table->id();
           $table->string('image')->nullable();
           $table->string('title')->nullable();
           $table->string('description')->nullable();
           $table->string('ticket_button')->nullable();
            $table->string('animation_direction');
            $table->string('text_box_position');

          //slider SEO
            $table->string('meta_og_type')->nullable();
            $table->string('meta_og_url')->nullable();
            $table->string('meta_og_title')->nullable();
            $table->text('meta_og_description')->nullable();
            $table->string('meta_og_image')->nullable();
            $table->string('meta_og_site_name')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slide_shows');
    }
};
