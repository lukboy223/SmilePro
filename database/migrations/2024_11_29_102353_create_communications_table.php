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
            // Foreign key reference to patients
            $table->foreignId('patient_id')
            ->constrained('patients') // Explicitly reference the 'patients' table
            ->cascadeOnDelete();
  
            // Foreign key reference to employees
            $table->foreignId('employee_id')
            ->constrained('employees') // Explicitly reference the 'employees' table
            ->cascadeOnDelete();
            
            $table->text('Message');
            $table->time('SentDate');
            $table->boolean('IsActive')->default(true); 
            $table->text('Note')->nullable();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communications');
    }
//test
};
