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
        Schema::create('test_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_group_id')->constrained('attribute_groups')->onDelete('cascade');
            $table->unsignedBigInteger('measurement_unit_id');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('default_value', 100);
            $table->unsignedTinyInteger('serial_number')->nullable();
            $table->string('formula', 255)->nullable();
            $table->smallInteger('formula_generated_value')->nullable();
            $table->boolean('is_visible_in_report')->default(true);
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
        Schema::dropIfExists('test_attributes');
    }
};
