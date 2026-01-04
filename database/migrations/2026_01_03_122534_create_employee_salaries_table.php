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
        Schema::create('employee_salaries', function (Blueprint $table) {
            $table->id();

            // ==============================
            // Employee Relation
            // ==============================
            $table->foreignId('employee_id')

                  ->constrained()
                  ->cascadeOnDelete();

            // ==============================
            // Salary Period
            // ==============================
            $table->unsignedTinyInteger('salary_month'); // 1–12
            $table->unsignedSmallInteger('salary_year'); // 2024, 2025...

            // ==============================
            // Earnings
            // ==============================
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('allowance', 10, 2)->default(0);
            $table->decimal('overtime_amount', 10, 2)->default(0);
            $table->decimal('bonus_amount', 10, 2)->default(0);

            // ==============================
            // Deductions (Nepal Context)
            // ==============================
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->decimal('pf_amount', 10, 2)->default(0);   // Provident Fund
            $table->decimal('ssf_amount', 10, 2)->default(0);  // Social Security Fund
            $table->decimal('cit_amount', 10, 2)->default(0);  // Citizen Investment Trust
            $table->decimal('advance_deduction', 10, 2)->default(0);
            $table->decimal('other_deduction', 10, 2)->default(0);

            // ==============================
            // Salary Totals
            // ==============================
            $table->decimal('gross_salary', 10, 2);
            $table->decimal('net_salary', 10, 2);

            // ==============================
            // Payment Info
            // ==============================
            $table->date('payment_date')->nullable();
            $table->enum('payment_method', ['cash', 'bank_transfer'])->nullable();

            // ==============================
            // Status & Control
            // ==============================
            $table->enum('status', ['draft', 'approved', 'paid'])
                  ->default('draft');

            $table->boolean('is_locked')->default(false);
            $table->text('remarks')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_salaries');
    }
};
