<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $fillable = ['id','aluno', 'curso', 'carga_horaria'];
}
