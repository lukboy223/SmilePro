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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->unsignedBigInteger('PatientId'); // Verwijzing naar een patiënt
            $table->unsignedTinyInteger('Rating')->check('Rating BETWEEN 1 AND 5'); // Rating tussen 1 en 5
            $table->string('PracticeEmail'); // E-mail van de praktijk
            $table->string('PracticePhone'); // Telefoonnummer van de praktijk
            $table->boolean('IsActive')->default(true); // Actief status
            $table->text('Note')->nullable(); // Optionele notitie
            $table->timestamps(); // 'created_at' en 'updated_at'-kolommen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
