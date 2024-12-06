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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName', length:50);
            $table->string('MiddleName', length:10,)->nullable()->default(null);
            $table->string('LastName', length:50);
            $table->date('DateOfBirth');
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
        Schema::dropIfExists('person');
    }
};
