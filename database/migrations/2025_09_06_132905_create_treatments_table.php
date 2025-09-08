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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion');
            $table->string('duracion');
            $table->foreignId('id_diagnostics')->constrained('diagnostics')->onDelete('cascade');
            $table->foreignId('id_doctors')->constrained('doctors')->onDelete('cascade');
            $table->string('estado', 50);
            $table->string('frecuencia_administracion', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
