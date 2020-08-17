<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'assuntos';

    public function filhos()
    {
        return $this->hasMany(\App\Assunto::class, 'id_pai');
    }
}
