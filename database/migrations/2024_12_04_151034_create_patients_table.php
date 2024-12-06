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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PersonId');
            $table->string('Number', 50);
            $table->text('MedicalRecord');
            $table->boolean('IsActive');
            $table->string('Note', 255);
            $table->timestamps();
            // relation foreign key person id

            $table->foreign('PersonId')->references('id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
