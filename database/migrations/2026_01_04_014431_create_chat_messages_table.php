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
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();

    // Conversation
    $table->foreignId('chat_thread_id')
          ->constrained('chat_threads')
          ->cascadeOnDelete();

    // Sender info
    $table->enum('sender_type', ['patient', 'doctor']);
    $table->unsignedBigInteger('sender_id');

    // Message content
    $table->text('message')->nullable();
    $table->string('attachment')->nullable(); // image/pdf/audio later

    // Read status
    $table->boolean('is_read')->default(false);
    $table->timestamp('read_at')->nullable();

    $table->timestamps();
$table->index(['sender_type', 'sender_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};
