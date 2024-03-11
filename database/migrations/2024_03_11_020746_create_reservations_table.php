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
        Schema::disableForeignKeyConstraints();

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 50)->unique();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->float('total_amount')->nullable();
            $table->string('status', 20)->default('pending');
            $table->text('description')->nullable();
            $table->string('payment_type')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
