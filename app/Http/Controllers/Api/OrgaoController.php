<?php

namespace App\Http\Controllers\Api;

use App\Orgao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrgaoController extends Controller
{
    function pesquisar()
    {
        try {
            return response()->json(['orgaos' => Orgao::get()]);
        } catch(\Exception $e) {
           return response()->json(['message' => 'Erro ao processar a requisição']);
        }
    }
}
