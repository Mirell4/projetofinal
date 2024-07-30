<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'informacoes_contato'];

    public function dadosSaude()
    {
        return $this->hasOne(DadosSaude::class);
    }

    // outras relações e métodos
}
