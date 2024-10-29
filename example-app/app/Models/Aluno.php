<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'informacoes_contato'];

    // outras relações e métodos
    public function contatos(){
        return $this->hasMany(contato::class);
    }

    public function atendimentos(){
        return $this->hasMany(atendimento::class);
    }
}
