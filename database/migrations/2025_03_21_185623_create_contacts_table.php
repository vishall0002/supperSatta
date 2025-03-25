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
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Contact name
        $table->string('email')->unique(); // Unique email
        $table->text('description')->nullable(); // Optional description
        $table->string('image')->nullable(); // Optional image path
        $table->string('address')->nullable(); // Optional address
        $table->string('mobile')->nullable(); // Optional phone number
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
