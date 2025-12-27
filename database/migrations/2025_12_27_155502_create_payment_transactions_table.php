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
        Schema::create('payment_transactions', function (Blueprint $table) {
               $table->id();

    $table->foreignId('payment_id')
          ->constrained()
          ->cascadeOnDelete();

    // Khalti fields
    $table->string('gateway')->nullable(); // khalti
    $table->string('transaction_id')->nullable();
    $table->string('gateway_token')->nullable();
    $table->json('gateway_response')->nullable();

    // Bank deposit fields
    $table->string('bank_name')->nullable();
    $table->string('deposit_slip')->nullable();
    $table->date('deposit_date')->nullable();
    $table->string('reference_no')->nullable();

    // Verification
    $table->foreignId('verified_by')->nullable()->constrained('users');
    $table->timestamp('verified_at')->nullable();
    $table->text('reject_reason')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
