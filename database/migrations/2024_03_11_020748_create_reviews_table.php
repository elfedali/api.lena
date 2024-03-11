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

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 50)->unique();
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('reviewer_id')->constrained('users');
            $table->integer('rating')->default(0);
            $table->text('review')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->foreignId('approved_by_id')->nullable()->constrained('users');
            $table->dateTime('approved_date')->nullable();
            $table->morphs('reviewable');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
