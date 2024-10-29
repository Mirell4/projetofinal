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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo');
            $table->string('comentario');
            $table->binary('arquivo')->nullable();
            $table->enum('status', ['Ativo', 'Inativo', 'Pendente']);
            $table->timestamps();


            $table->foreignId('aluno_id')->constrained();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
