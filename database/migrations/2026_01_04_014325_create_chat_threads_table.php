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
        Schema::create('chat_threads', function (Blueprint $table) {
            $table->id();

    // Participants
    $table->foreignId('patient_id')
          ->constrained('patients')
          ->cascadeOnDelete();

    $table->foreignId('doctor_id')
          ->constrained('doctors')
          ->cascadeOnDelete();

    // Optional: link to ticket / appointment
    $table->foreignId('ticket_id')
          ->nullable()
          ->constrained('tickets')
          ->nullOnDelete();

    // Status
    $table->enum('status', ['open', 'closed'])
          ->default('open');

    $table->timestamps();

    // One chat per patient–doctor–ticket
    $table->unique(['patient_id', 'doctor_id', 'ticket_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_threads');
    }
};
