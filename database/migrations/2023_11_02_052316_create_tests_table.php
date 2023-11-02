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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->unsignedBigInteger('measurement_unit_id');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('short_name', 16);
            $table->decimal('service_charge', 10, 2);
            $table->tinyInteger('normal_report_delivery_hour')->nullable();
            $table->tinyInteger('urgent_report_delivery_hour')->nullable();
            $table->boolean('is_container')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
