<?php

namespace App;

use App\Questao;
use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $table = 'orgaos';

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }
}
