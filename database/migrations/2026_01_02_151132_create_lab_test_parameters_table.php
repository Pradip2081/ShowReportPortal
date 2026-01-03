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
        Schema::create('lab_test_parameters', function (Blueprint $table) {
            $table->id();
             $table->foreignId('lab_test_id')
          ->constrained()
          ->cascadeOnDelete();
            $table->string('parameter_name'); // Hb, RBC
            $table->string('unit')->nullable(); // g/dl
            $table->string('normal_range')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_test_parameters');
    }
};
