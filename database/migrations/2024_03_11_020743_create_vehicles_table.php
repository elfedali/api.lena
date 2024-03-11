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

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by_id')->constrained('users');
            $table->foreignId('agency_id')->constrained();
            $table->string('make', 50);
            $table->string('model', 50);
            $table->integer('year');
            $table->string('color', 50);
            $table->string('plate', 20);
            $table->integer('kilometers');
            $table->float('daily_rent');
            $table->string('comment_status', 20);
            $table->string('ping_status', 20);
            $table->string('status', 20);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
