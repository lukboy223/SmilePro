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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $foreignId = $table->foreignId('patientId');
            $foreignId->constrained('patient');
            $table->string('streetName', length:100);
            $table->string('houseNumber', length:10);
            $table->string('city', length:100);
            $table->string('postalCode', length:10);
            $table->string('mobile', length:10);
            $table->string('email', length:100);
            $table->boolean('IsActive')->default(true);
            $table->string('note', length:255)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
