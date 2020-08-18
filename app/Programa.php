<?php

namespace App;

use App\Assunto;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';

    public function assuntos()
    {
        return $this->belongsToMany(Assunto::class);
    }
}
