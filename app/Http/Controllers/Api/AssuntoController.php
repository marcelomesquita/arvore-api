<?php

namespace App\Http\Controllers\Api;

use App\Assunto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    function pesquisar(Request $request)
    {
        try {
            $search = $request->all();

            $assuntos = Assunto::where('assunto_id', null)
                ->with('assuntos')
                ->whereHas('assuntos', function ($query) use ($search) {
                    $query->whereHas('questoes', function ($query) use ($search) {
                        if (isset($search['banca_id']) && !empty($search['banca_id'])) {
                            $query->where('banca_id', $search['banca_id']);
                        }

                        if (isset($search['orgao_id']) && !empty($search['orgao_id'])) {
                            $query->where('orgao_id', $search['orgao_id']);
                        }
                    });
                })
                ->get();

            return response()->json(['assuntos' => $assuntos], 200);
        } catch(\Exception $e) {
            return response()->json(['mensagem' => 'Erro ao processar a requisição: ' . $e->getMessage()], 500);
        }
    }
}
