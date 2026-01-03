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
        Schema::create('lab_report_files', function (Blueprint $table) {
            $table->id();

         $table->foreignId('lab_order_id')
          ->constrained()
          ->cascadeOnDelete();

         $table->string('file_path');
            $table->timestamp('published_at')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_report_files');
    }
};
