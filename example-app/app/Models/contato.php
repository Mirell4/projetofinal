<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id',
        'email',
        'telefone',
        'responsavel',
    ];    

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
