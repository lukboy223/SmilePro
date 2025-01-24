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
            $table->unsignedBigInteger('patient_id'); // Buitenlandse sleutel
            $table->string('straatnaam');
            $table->string('huisnummer');
            $table->string('toevoeging')->nullable();
            $table->string('postcode', 10); // Max 10 tekens voor Nederlandse postcodes
            $table->string('plaats');
            $table->string('mobiel', 15); // Max lengte voor een mobiel nummer
            $table->string('email')->unique(); // Uniek voor elke patiënt
            $table->boolean('is_actief')->default(true); // Standaard actief
            $table->text('opmerking')->nullable(); // Kan leeg zijn
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
