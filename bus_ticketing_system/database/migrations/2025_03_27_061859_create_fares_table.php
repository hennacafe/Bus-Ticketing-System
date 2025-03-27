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
        Schema::create('fares', function (Blueprint $table) {
            $table->id();
            $table->decimal('base_price', 8, 2);
            $table->decimal('final_price', 8, 2)->nullable();;
            $table->boolean('has_voucher')->default(false);
            $table->foreignId('routes_id')->constrained()->onDelete('cascade');
            $table->foreignId('terminals_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fares');
    }
};
