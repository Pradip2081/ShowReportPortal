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
        Schema::create('lab_bills', function (Blueprint $table) {
            $table->id();

    $table->foreignId('lab_order_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->foreignId('patient_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->string('bill_number')->unique();

    $table->decimal('sub_total', 10, 2);
    $table->decimal('discount', 10, 2)->default(0);
    $table->decimal('tax', 10, 2)->default(0);
    $table->decimal('grand_total', 10, 2);

    $table->enum('status', [
        'unpaid',
        'partial',
        'paid'
    ])->default('unpaid');

    $table->timestamp('billed_at')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_bills');
    }
};
