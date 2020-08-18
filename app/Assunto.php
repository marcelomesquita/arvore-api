<?php

namespace App;

use App\Assunto;
use App\Programa;
use App\Questao;
use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'assuntos';

    public function filhos()
    {
        return $this->hasMany(Assunto::class);
    }

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

    public function programas()
    {
        return $this->belongsToMany(Programa::class);
    }
}
