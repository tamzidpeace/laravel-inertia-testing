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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_number', 32);
            $table->foreign('invoice_number')->references('invoice_number')->on('invoices')->onDelete('cascade');

            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->decimal('service_charge', 10, 2);
            $table->timestamp('report_delivery_date')->nullable();
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
