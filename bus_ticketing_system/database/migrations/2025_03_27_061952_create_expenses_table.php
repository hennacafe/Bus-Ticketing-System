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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedules_id')->nullable()->constrained()->onDelete('set null');   // optional: expense per schedule
            $table->foreignId('buses_id')->nullable()->constrained()->onDelete('set null');        // optional: expense per bus
            $table->decimal('amount', 10, 2);   // cost value
            $table->string('description');      // e.g., "fuel", "repair"
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
