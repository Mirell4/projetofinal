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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('nome');
            $table->string('horario');
            $table->string('endereco');
            $table->string('nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('inicio');
            $table->string('termino');
            $table->string('status');
            $table->binary('foto')->nullable();
            // Add other necessary columns here
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};