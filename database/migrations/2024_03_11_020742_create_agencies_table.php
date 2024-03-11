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

        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users');
            $table->string('uuid', 50)->unique();
            $table->string('name', 100);
            $table->string('slug', 150)->unique();
            $table->string('address', 150)->nullable();
            $table->string('help_address', 150)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('zip_code', 20)->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('logo')->nullable();
            $table->string('cover')->nullable();
            $table->text('description')->nullable();
            $table->string('status', 20)->default('publish');
            $table->string('comment_status', 20)->default('closed');
            $table->string('currency', 10)->default('MAD');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
