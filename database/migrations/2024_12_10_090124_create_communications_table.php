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
            $table->foreignIdFor(\App\Models\Patient::class, 'PatientId')  // Foreign key reference to Employee
            ->constrained()  // Automatically references the 'employees' table and 'id' column
            ->cascadeOnDelete();  // Deletes associated rows in availabilities if the Employee is deleted
            $table->foreignIdFor(\App\Models\Employee::class, 'EmployeeId')  // Foreign key reference to Employee
            ->constrained()  // Automatically references the 'employees' table and 'id' column
            ->cascadeOnDelete();  // Deletes associated rows in availabilities if the Employee is deleted
            $table->text('Message');
            $table->time('SentDate');
            $table->boolean('IsActive');
            $table->text('Note');
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
};
