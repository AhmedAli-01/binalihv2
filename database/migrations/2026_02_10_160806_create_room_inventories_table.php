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
        Schema::create('room_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type_id')->constrained()->cascadeOnDelete();
            $table->date('calendar_date');
            $table->integer('total_inventory'); // Total rooms of this type
            $table->integer('sold_count')->default(0);
            $table->integer('blocked_count')->default(0); // For maintenance/buffers

            // This is the "Safety Lock": One row per type per day
            $table->unique(['room_type_id', 'calendar_date']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_inventories');
    }
};
