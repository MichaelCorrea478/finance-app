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
            $table->string('description');
            $table->foreignId('category_id')->constrained('categories');
            $table->decimal('value', 10, 2)->nullable();
            $table->date('due_date');
            $table->boolean('debit')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->boolean('monthly')->default(false);
            $table->boolean('fixed_value')->default(false);
            $table->timestamps();
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
