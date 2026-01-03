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
        Schema::create('employee_taxes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_profile_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->decimal('amount', 12, 2);
            $table->enum('type', ['income_tax', 'other'])->default('income_tax');
            $table->date('paid_date')->nullable();
            $table->enum('status', ['pending', 'paid'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_taxes');
    }
};
