<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AtendimentoSaudeController;

class atendimento extends Model
{
    protected $fillable = ['titulo', 'comentario', 'status', 'arquivo', 'aluno_id'];
    use HasFactory;

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
