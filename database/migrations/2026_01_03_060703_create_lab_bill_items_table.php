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
        Schema::create('lab_bill_items', function (Blueprint $table) {
             $table->id();

        $table->foreignId('lab_bill_id')
          ->constrained()
          ->cascadeOnDelete();

        $table->foreignId('lab_test_id')
          ->constrained()
          ->cascadeOnDelete();

    // Snapshot fields (do NOT change later)
            $table->string('test_name');
            $table->decimal('unit_price', 10, 2);
            $table->integer('quantity')->default(1);
            $table->decimal('total_price', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_bill_items');
    }
};
