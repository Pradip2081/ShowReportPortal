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
        Schema::create('lab_results', function (Blueprint $table) {
           $table->id();

        $table->foreignId('lab_order_item_id')
          ->constrained()
          ->cascadeOnDelete();

        $table->foreignId('lab_test_parameter_id')
          ->nullable()
          ->constrained()
          ->cascadeOnDelete();

        $table->string('result_value')->nullable();
        $table->string('unit')->nullable();
        $table->string('reference_range')->nullable();

    // Who signed/verified this result
            $table->foreignId('signed_by')
          ->nullable()
          ->constrained('users') // or 'doctors' / 'lab_staff'
          ->nullOnDelete();

            $table->timestamp('signed_at')->nullable(); // optional timestamp

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_results');
    }
};
