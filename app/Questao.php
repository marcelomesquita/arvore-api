<?php

namespace App;

use App\Assunto;
use App\Banca;
use App\Orgao;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    public function assunto()
    {
        return $this->belongsTo(Assunto::class);
    }

    public function getBanca()
    {
        return $this->belongsTo(Banca::class);
    }

    public function getOrgao()
    {
        return $this->belongsTo(Orgao::class);
    }
}
