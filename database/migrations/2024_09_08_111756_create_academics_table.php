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
        Schema::create('academics', function (Blueprint $table) {
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Relación con estudiantes
            $table->string('subject'); // Asignatura
            $table->integer('grade'); // Calificación
            $table->date('date'); // Fecha del registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
