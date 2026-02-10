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
        Schema::create('guest_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained()->cascadeOnDelete();
            $table->string('type'); // e.g., 'Passport', 'Driver License'
            $table->string('document_number');
            $table->string('issue_country')->nullable();
            $table->date('expiry_date'); // Crucial for validity tracking
            $table->string('attachment_path')->nullable(); // Path to photo/scan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_documents');
    }
};
