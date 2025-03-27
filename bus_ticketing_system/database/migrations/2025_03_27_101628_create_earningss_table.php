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
        Schema::create('earningss', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trips_id')->nullable()->constrained()->onDelete('set null');       
            $table->foreignId('schedules_id')->nullable()->constrained()->onDelete('set null');   
            $table->decimal('amount', 10, 2);   // total earning amount
            $table->date('date');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earningss');
    }
};
