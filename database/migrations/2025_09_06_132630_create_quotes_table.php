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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->text('motivo');
            $table->foreignId('id_patients')->constrained('patients')->onDelete('cascade');
            $table->foreignId('id_doctors')->constrained('doctors')->onDelete('cascade');
            $table->string('estado', 50);
            $table->text('observaciones');
            $table->string('sala', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
