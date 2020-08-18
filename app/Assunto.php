<?php

namespace App;

use App\Assunto;
use App\Programa;
use App\Questao;
use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'assuntos';
    protected $appends = ['total'];

    public function assuntos()
    {
        return $this->hasMany(Assunto::class)->with('assuntos');
    }

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

    public function programas()
    {
        return $this->belongsToMany(Programa::class);
    }

    public function getTotalAttribute()
    {
        return $this->questoes()->count();
    }
}
