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
        Schema::create('availability', function (Blueprint $table) {
            $table->id();
            $foreignId = $table->foreignId('EmployeeId');
            $foreignId->constrained('employee');
            $table->date('FromDate');
            $table->date('ToDate');
            $table->time('FromTime');
            $table->time('ToTime');
            $table->string('status', length:255);
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
        Schema::dropIfExists('availability');
    }
};
