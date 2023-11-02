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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->string('invoice_number', 32)->unique();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('total_urgent_fee', 10, 2);
            $table->decimal('total_service_charge', 10, 2);
            $table->decimal('payable_amount', 10, 2);
            $table->decimal('paid_amount', 10, 2);
            $table->boolean('is_paid')->default(false);
            $table->timestamp('report_delivery_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
