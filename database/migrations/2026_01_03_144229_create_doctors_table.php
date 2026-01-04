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
        Schema::create('doctors', function (Blueprint $table) {
              $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // Basic Info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('viber', 20)->nullable();
            $table->string('cizenship_number', 20)->nullable();
            $table->string('national_id_number', 20)->nullable();
            $table->string('address')->nullable();

            // others details
            $table->string('cit_number', 20)->nullable();
            $table->string('ksk_number', 20)->nullable();
            $table->string('pan_number', 20)->nullable();
            $table->string('insurance_number', 20)->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_number', 25)->nullable();
            $table->string('branch_name')->nullable();

               // available shift
            $table->string('full_time')->nullable();
            $table->string('part_time')->nullable();
            $table->string('hour_basis')->nullable();
            $table->string('morning')->nullable();
            $table->string('afternoon')->nullable();
            $table->string('evening')->nullable();


            // Professional Details
            $table->string('specialization');
            $table->string('doctor_code')->unique();
            $table->string('qualification')->nullable();
            $table->integer('experience_years')->default(0);
            $table->string('license_number')->nullable();


            // Hospital Related
            $table->string('department')->nullable();
            $table->decimal('consultation_fee', 8, 2)->default(0);
            $table->string('signature')->nullable();
            $table->string('image')->nullable();
                            // Availability
                             // for seo
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_author')->nullable();
            $table->text('meta_og_url')->nullable();
            $table->text('meta_og_title')->nullable();
            $table->text('meta_og_description')->nullable();
            $table->text('meta_og_image')->nullable();
            $table->boolean('is_available')->default(true);
            $table->boolean('display_on_frontpage')->default(true);
            $table->boolean('display_on_dashboard')->default(false);

            // Status
            $table->enum('status', ['active', 'inactive'])->default('active');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
