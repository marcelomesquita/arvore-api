<?php

namespace App\Http\Controllers\Api;

use App\Assunto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    function pesquisar()
    {
        try {
            $assuntos = Assunto::where('assunto_id', null)
                ->with('assuntos')
                // ->where('questoes.banca_id', 2)
                // ->orWhere('assuntos.questoes.banca_id', 2)
                // ->whereHas('questoes', function ($query) {
                    // $query->where('banca_id', 2);
                // })
                // ->whereHas('assuntos', function ($query) {
                //     $query->whereHas('questoes', function ($query) {
                //         $query->where('banca_id', 2);
                //     });
                // })
                ->get();

            return response()->json(['assuntos' => $assuntos]);
        } catch(\Exception $e) {
           return response()->json(['message' => 'Erro ao processar a requisição'], 500);
        }
    }
}
