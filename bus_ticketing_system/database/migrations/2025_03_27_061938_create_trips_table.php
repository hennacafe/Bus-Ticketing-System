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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passengers_id')->constrained()->onDelete('cascade');
            $table->foreignId('schedules_id')->constrained()->onDelete('cascade');
            $table->foreignId('fares_id')->constrained()->onDelete('cascade');
            $table->foreignId('vouchers_id')->nullable()->constrained()->onDelete('set null');
            $table->enum('status', ['booked', 'cancelled', 'completed']);
            $table->decimal('final_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
