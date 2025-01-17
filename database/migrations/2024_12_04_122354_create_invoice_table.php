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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $foreignId = $table->foreignId('PatientId');
            $foreignId->constrained('patient');
            $foreignId = $table->foreignId('treatmentId');
            $foreignId->constrained('treatment');
            $table->string('Number', length:10);
            $table->date('Date');
            $table->decimal('Amount', total:6, places:2);
            $table->string('Status', length:255);
            $table->string('Note', length:255)->nullable()->default(null);
            $table->boolean('IsActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
