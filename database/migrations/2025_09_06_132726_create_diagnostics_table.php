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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->date('fecha');
            $table->foreignId('id_patients')->constrained('patients')->onDelete('cascade');
            $table->foreignId('id_doctors')->constrained('doctors')->onDelete('cascade');
            $table->string('gravedad', 50);
            $table->text('recomendaciones');
            $table->string('tipo_diagnostico', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostics');
    }
};
