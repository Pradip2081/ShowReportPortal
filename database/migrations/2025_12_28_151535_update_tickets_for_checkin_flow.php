<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tickets', function (Blueprint $table) {

            // Add new statuses (MySQL enum needs raw SQL)
            DB::statement("
                ALTER TABLE tickets
                MODIFY status ENUM(
                    'pending',
                    'confirmed',
                    'in_consultation',
                    'completed',
                    'cancelled',
                    'patient_absent',
                    'doctor_absent'
                ) DEFAULT 'pending'
            ");

            // Time tracking
            $table->timestamp('checked_in_at')->nullable()->after('status');
            $table->timestamp('completed_at')->nullable()->after('checked_in_at');
        });
    }

    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {

            // Rollback enum
            DB::statement("
                ALTER TABLE tickets
                MODIFY status ENUM(
                    'pending',
                    'confirmed',
                    'completed',
                    'cancelled'
                ) DEFAULT 'pending'
            ");

            $table->dropColumn(['checked_in_at', 'completed_at']);
        });
    }
};
