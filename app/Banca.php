<?php

namespace App;

use App\Questao;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $table = 'bancas';

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }
}
