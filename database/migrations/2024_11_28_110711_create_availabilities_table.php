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
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id(); // Unieke ID voor elke beschikbaarheid
            $table->unsignedBigInteger('EmployeeId'); // Verwijzing naar de werknemer (foreign key)
            $table->date('FormDate'); // Datum van de start van de beschikbaarheid
            $table->date('ToDate'); // Datum van het einde van de beschikbaarheid
            $table->time('FormTime'); // Tijdstip van de start van de beschikbaarheid
            $table->time('ToTime'); // Tijdstip van het einde van de beschikbaarheid
            $table->string('Status'); // Status van beschikbaarheid (bijv. Available/Unavailable)
            $table->boolean('IsActive')->nullable();// Actief veld (true = actief, false = inactief)
            $table->text('Note')->nullable(); // Eventuele opmerkingen, kan leeg zijn
            $table->timestamps(); // Creëert `created_at` en `updated_at` kolommen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availabilities');
    }
};
