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
            $table->unsignedBigInteger('PatientId');
            // Foreign key reference to employees
            $table->unsignedBigInteger('EmployeeId');
            $table->text('Message');
            $table->time('SentDate');
            $table->boolean( 'IsActive')->default(true);
            $table->string('Note')->nullable()->default(null);
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
