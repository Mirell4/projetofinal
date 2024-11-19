<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'nascimento', 'informacoes_contato', 'tipo', 'horario', 
    'rg', 'cpf', 'endereco',  'inicio', 'termino','foto'];

    // outras relações e métodos
    public function contatos(){
        return $this->hasMany(contato::class);
    }

    public function atendimentos(){
        return $this->hasMany(atendimento::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
