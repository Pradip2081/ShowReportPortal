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
        Schema::create('advance_salary_requests', function (Blueprint $table) {
            $table->id();

    $table->foreignId('employee_profile_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->decimal('amount', 10, 2);
    $table->string('reason')->nullable();

    $table->enum('status', [
        'pending',
        'approved',
        'rejected',
        'paid'
    ])->default('pending');

    $table->foreignId('approved_by')->nullable();
    $table->timestamp('paid_at')->nullable();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advance_salary_requests');
    }
};
