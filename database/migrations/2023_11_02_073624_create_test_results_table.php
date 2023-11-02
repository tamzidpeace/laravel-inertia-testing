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
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('sample_collection_id')->constrained('sample_collections')->onDelete('cascade');

            $table->string('invoice_number', 32);
            $table->foreign('invoice_number')->references('invoice_number')->on('invoices')->onDelete('cascade');

            $table->foreignId('test_attribute_id')->constrained('test_attributes')->onDelete('cascade');
            $table->text('result');
            $table->foreignId('prepared_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('finalized_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('checked_by')->constrained('users')->onDelete('cascade');
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
