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
        Schema::create('employees', function (Blueprint $table) {
             $table->id();
    $table->string('emp_id')->unique();

    $table->foreignId('designation_id')
          ->constrained('designations')
          ->cascadeOnUpdate()
          ->restrictOnDelete();

    $table->string('name');
    $table->string('phone');
    $table->string('email')->unique();

    // Government & finance
    $table->string('national_id')->nullable();
    $table->string('licence_num')->nullable();
    $table->string('pan_num')->nullable();
    $table->string('citizenship_num')->nullable();


    $table->string('ssf_num')->nullable();
    $table->string('cit_num')->nullable();
    $table->string('account_num')->nullable();
    $table->string('ksk_number')->nullable();

     // Address
    $table->string('country');
    $table->string('zone');
    $table->string('district');
    $table->string('municipality');
    $table->string('ward');
    $table->string('street');

    // Social
    $table->string('facebook_id')->nullable();
    $table->string('whatsapp_num', 20)->nullable();
    $table->string('viber', 20)->nullable();
    $table->string('instagram_id')->nullable();

    // Media & SEO
    $table->string('image')->nullable();
    $table->text('meta_title')->nullable();
    $table->text('meta_description')->nullable();

    $table->string('status')->default('pending');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
