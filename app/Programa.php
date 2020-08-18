<?php

namespace App;

use App\Assunto;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';
    protected $fillable = [
        'nome', 'banca_id', 'orgao_id'
    ];

    public function assuntos()
    {
        return $this->belongsToMany(Assunto::class);
    }
}
