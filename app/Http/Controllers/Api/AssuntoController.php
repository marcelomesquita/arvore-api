<?php

namespace App\Http\Controllers\Api;

use App\Assunto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    function pesquisar($idPai = null)
    {
        try {
            return response()->json(['assuntos' => Assunto::where('id_pai', $idPai)->withCount('filhos')->get()]);
        } catch(\Exception $e) {
           return response()->json(['message' => 'Erro ao processar a requisição']);
        }
    }
}
