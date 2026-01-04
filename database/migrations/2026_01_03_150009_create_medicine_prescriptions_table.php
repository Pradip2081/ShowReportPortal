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
        Schema::create('medicine_prescriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('prescription_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // Medicine basic info
            $table->string('medicine_name');
            $table->string('dose')->nullable(); // 500mg, 10ml, etc

            // Medicine form
            $table->enum('form', [
                'tablet',
                'capsule',
                'syrup',
                'injection'
            ]);

            // Duration
            $table->string('duration')->nullable(); // 5 days, 1 week

            // Time of intake
            $table->boolean('morning')->default(false);
            $table->boolean('afternoon')->default(false);
            $table->boolean('evening')->default(false);
            $table->boolean('night')->default(false);

            // Instructions
            $table->text('use_instruction')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_prescriptions');
    }
};
