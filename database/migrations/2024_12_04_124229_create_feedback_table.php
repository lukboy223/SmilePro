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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $foreignId = $table->foreignId('PatientId');
            $foreignId->constrained('patient');
            $table->tinyInteger('rating');
            $table->string('PracticeEmail', length:100);
            $table->string('PracticePhone', length:10);
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
        Schema::dropIfExists('feedback');
    }
};
