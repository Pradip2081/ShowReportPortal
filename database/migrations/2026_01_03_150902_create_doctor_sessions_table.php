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
        Schema::create('doctor_sessions', function (Blueprint $table) {
             $table->id();
            $table->foreignId('doctor_id')->constrained()->cascadeOnDelete();
            $table->timestamp('logged_in_at')->nullable();
            $table->timestamp('last_active_at')->nullable();
            $table->timestamp('logged_out_at')->nullable();
            $table->boolean('is_online')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_sessions');
    }
};
