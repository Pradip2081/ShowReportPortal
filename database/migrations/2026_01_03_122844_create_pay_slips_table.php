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
        Schema::create('pay_slips', function (Blueprint $table) {
               $table->id();

            // ==============================
            // Relations
            // ==============================
            $table->foreignId('employee_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('employee_salarie_id')
                  ->constrained('employee_salaries')
                  ->cascadeOnDelete();

            // ==============================
            // Payslip Period
            // ==============================
            $table->unsignedTinyInteger('salary_month'); // 1–12
            $table->unsignedSmallInteger('salary_year'); // 2024, 2025

            // ==============================
            // Earnings (Snapshot)
            // ==============================
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('allowance', 10, 2)->default(0);
            $table->decimal('overtime_amount', 10, 2)->default(0);
            $table->decimal('bonus_amount', 10, 2)->default(0);

            // ==============================
            // Deductions (Snapshot)
            // ==============================
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->decimal('pf_amount', 10, 2)->default(0);
            $table->decimal('ssf_amount', 10, 2)->default(0);
            $table->decimal('cit_amount', 10, 2)->default(0);
            $table->decimal('advance_deduction', 10, 2)->default(0);
            $table->decimal('other_deduction', 10, 2)->default(0);

            // ==============================
            // Totals
            // ==============================
            $table->decimal('gross_salary', 10, 2);
            $table->decimal('total_deduction', 10, 2);
            $table->decimal('net_salary', 10, 2);

            // ==============================
            // Payslip Info
            // ==============================
            $table->string('payslip_number')->unique(); // PS-2025-08-0001
            $table->date('issued_date')->default(now());

            // ==============================
            // Status
            // ==============================
            $table->enum('status', ['generated', 'sent', 'paid'])
                  ->default('generated');

            $table->boolean('is_locked')->default(true); // Payslip never editable
            $table->text('remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_slips');
    }
};
