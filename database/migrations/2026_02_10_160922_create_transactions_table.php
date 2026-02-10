<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('folio_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained(); // Staff who did it
            $table->string('type'); // Charge, Payment, Refund
            $table->string('description'); // e.g., 'Room Charge', 'Visa Payment'
            $table->decimal('amount', 10, 2);
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
