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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PatientId');
            $table->unsignedBigInteger('EmployeeId');
            $table->date('Date');
            $table->time('Time');
            $table->string('treatmentType', length:255);
            $table->text('description');
            $table->decimal('cost', total:6, places:2);
            $table->string('Status', length:255);
            $table->string('Note', length:255)->nullable()->default(null);
            $table->boolean('IsActive')->default(true);
            $table->timestamps();

            // relation foreign key patient id

            $table->foreign('PatientId')->references('id')->on('patients');


            // relation foreign key employee id

            $table->foreign('EmployeeId')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
