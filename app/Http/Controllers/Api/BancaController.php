<?php

namespace App\Http\Controllers\Api;

use App\Banca;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    function pesquisar()
    {
        try {
            return response()->json(['bancas' => Banca::get()]);
        } catch(\Exception $e) {
           return response()->json(['message' => 'Erro ao processar a requisição']);
        }
    }
}
