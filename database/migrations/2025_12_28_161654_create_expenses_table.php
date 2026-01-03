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
        Schema::create('expenses', function (Blueprint $table) {
             $table->id();

    $table->string('title'); // Expense title
    $table->decimal('amount', 12, 2); // Expense amount

    // Type: Expensible (can be reimbursed / charged to a project) or Non-Expensible (fixed/internal)
    $table->enum('expense_type', ['expensible', 'non_expensible'])->default('non_expensible');

    // Optional category for detailed reporting
    $table->enum('category', ['office', 'salary', 'tax', 'utility', 'misc'])->default('office');

    $table->text('description')->nullable(); // Details
    $table->date('expense_date'); // When expense occurred

    $table->foreignId('employee_profile_id')->nullable()->constrained()->cascadeOnDelete();
    // Optional: who made the expense

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
