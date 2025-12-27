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
        Schema::create('company_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('com_name');

            //company address
            $table->string('gmail')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_one')->nullable();
            $table->string('contact_two')->nullable();
            $table->string('contact_three')->nullable();
             $table->text('map')->nullable();
            $table->string('contact_four')->nullable();
            $table->string('favicon')->nullable();


            // social media
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('viber')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();


    // Basic SEO

    $table->string('meta_title', 255)->nullable();    // Google search title
    $table->text('meta_description')->nullable(); // Search result description
    $table->text('meta_keywords')->nullable(); // Optional (legacy but usable internally)
    $table->string('meta_author')->nullable();
    $table->string('meta_robots')->nullable(); // index, follow (Search engine behavior)

    // Canonical
      $table->string('canonical_url')->nullable(); //Prevent duplicate content

    // Open Graph (Facebook, LinkedIn, WhatsApp)
    // Social media preview
    $table->string('meta_og_type')->nullable(); // website, article, profile
    $table->string('meta_og_url')->nullable();
    $table->string('meta_og_title')->nullable(); //Social media preview
    $table->text('meta_og_description')->nullable();
    $table->string('meta_og_image')->nullable();
    $table->string('meta_og_site_name')->nullable();


    // Twitter/X sharing
    $table->string('meta_twitter_card')->nullable(); // summary_large_image
    $table->string('meta_twitter_title')->nullable();
    $table->text('meta_twitter_description')->nullable();
    $table->string('meta_twitter_image')->nullable();
    $table->string('status')->default('pending');
     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_contacts');
    }
};
