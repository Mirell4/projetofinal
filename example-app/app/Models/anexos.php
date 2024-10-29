<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anexos extends Model
{
    use HasFactory;
    public function anexo(){
        return $this->belongsTo(atendimento::class);
    }
}
