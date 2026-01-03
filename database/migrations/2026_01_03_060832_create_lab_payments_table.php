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
        Schema::create('lab_payments', function (Blueprint $table) {
              $table->id();

    $table->foreignId('lab_bill_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->enum('payment_method', [
        'cash',
        'card',
        'bank',
        'khalti',
        'esewa'
    ]);

    $table->decimal('amount', 10, 2);

    $table->string('transaction_ref')->nullable();

    $table->timestamp('paid_at');

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_payments');
    }
};
