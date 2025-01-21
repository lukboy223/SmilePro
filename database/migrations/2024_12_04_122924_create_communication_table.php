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
        Schema::create('communication', function (Blueprint $table) {
            $table->id();
            $foreignId = $table->foreignId('patientId');
            $foreignId->constrained('patient');
            $foreignId = $table->foreignId('employeeId');
            $foreignId->constrained('employee');
            $table->text('Message');
            $table->timestamp('SendDate', precision:6)->useCurrent();
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
        Schema::dropIfExists('communication');
    }
};
