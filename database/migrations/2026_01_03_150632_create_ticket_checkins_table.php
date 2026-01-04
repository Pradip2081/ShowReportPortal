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
        Schema::create('ticket_checkins', function (Blueprint $table) {
            $table->id();

    // Relations
    $table->foreignId('ticket_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->foreignId('patient_id')
          ->constrained()
          ->cascadeOnDelete();

    // Check-in flow
    $table->timestamp('checked_in_at')->nullable();
    $table->timestamp('checked_out_at')->nullable();

    $table->enum('checkin_method', ['manual', 'qr', 'biometric'])
          ->default('manual');

    // Who performed check-in
    $table->foreignId('employee_id')
          ->nullable()
          ->constrained('employees')
          ->nullOnDelete();

    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_checkins');
    }
};
