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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('dosis', 50);
            $table->string('frecuencia', 50);
            $table->string('duracion', 50);
            $table->foreignId('id_treatments')->constrained('treatments')->onDelete('cascade');
            $table->string('proveedor', 50);
            $table->string('efectos_secundarios', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
