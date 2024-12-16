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
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('EmployeeId');
            $table->date('FormDate');
            $table->date('ToDate');
            $table->time('FormTime');
            $table->time('ToTime');
            $table->enum('Status', ['Present', 'Absent', 'Leave', 'Sick']); // Enum column
            $table->boolean('IsActive')->default(true);
            $table->string('Note')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availabilities');
    }
};