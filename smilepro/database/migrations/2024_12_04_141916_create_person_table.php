<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
     // Run the migrations.
     
    public function up(): void
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName', 50);
            $table->string('MiddleName', 5)->nullable();
            $table->string('LastName', 50);
            $table->date('BirthDate');
            $table->boolean('IsActive');
            $table->string('Note', 255)->nullable();
            $table->timestamp('CreatedDate', 6)->useCurrent();
            $table->timestamp('UpdatedDate', 6)->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    
     // Reverse the migrations.
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
