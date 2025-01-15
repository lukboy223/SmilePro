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
        Schema::create('communications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PatientId'); // Verwijzing naar de patient (foreign key)
            $table->unsignedBigInteger('EmployeeId'); // Verwijzing naar de werknemer (foreign key)
            $table->text('Message'); // Bericht dat verstuurd is
            $table->timestamp('SentDate'); // Datum van verzending
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
        Schema::dropIfExists('communications');
    }
};
