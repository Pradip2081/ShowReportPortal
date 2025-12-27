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
        Schema::create('service_lists', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('service_one');
            $table->string('service_two');
            $table->string('service_three');
            $table->string('service_four');
            $table->string('service_five');
             $table->string('animation_direction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_lists');
    }
};
