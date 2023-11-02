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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collected_by')->constrained('users')->onDelete('cascade');
            $table->string('description', 100);
            $table->decimal('amount', 10, 2);
            $table->string('transaction_id', 32)->uniqid();
           
            $table->string('invoice_number', 32);
            $table->foreign('invoice_number')->references('invoice_number')->on('invoices')->onDelete('cascade');

            $table->string('payment_id', 64)->uniqid();
            $table->string('note', 500)->nullable();
            $table->string('payment_method')->default('CASH')->comment('CASH', 'BANK', 'CARD', 'MFS');
            $table->string('payment_type')->default('BKASH')->comment('BKASH', 'NAGAD', 'VISA', 'AMEX', 'MASTERCARD'); //
            $table->string('payment_status')->default('hold')->comment('hold', 'completed', 'rejected', 'failed', 'refund');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
