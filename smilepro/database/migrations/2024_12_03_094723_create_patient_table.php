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
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PersonId')->constrained('person')->onDelete('cascade');
            $table->string('Number', 50)->unique();
            $table->text('MedicalRecord');
            $table->string('Note', 255)->nullable()->default(null);
            $table->boolean('IsActive')->default(true);
            $table->timestamps();
        });

        Schema::table('person', function (Blueprint $table) {
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
        Schema::table('person', function (Blueprint $table) {
            $table->dropColumn('UserId');
        });
    }
};
