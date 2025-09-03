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
        Schema::table('submissions', function (Blueprint $table) {
            // Eliminar campos no necesarios
            $table->dropColumn(['keywords', 'thematic_axis', 'presentation_type', 'originality_letter_path', 'enrollment_certificate_path', 'dni_path']);
            
            // Cambiar el campo de archivo único a JSON para múltiples archivos
            $table->dropColumn('resume_file_path');
            $table->json('pdf_files')->nullable(); // Para almacenar múltiples archivos PDF
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            // Restaurar campos eliminados
            $table->string('keywords')->nullable();
            $table->enum('thematic_axis', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('presentation_type', ['oral', 'poster'])->nullable();
            $table->string('originality_letter_path')->nullable();
            $table->string('enrollment_certificate_path')->nullable();
            $table->string('dni_path')->nullable();
            
            // Restaurar campo de archivo único
            $table->dropColumn('pdf_files');
            $table->string('resume_file_path')->nullable();
        });
    }
};
