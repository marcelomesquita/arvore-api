<?php

namespace App\Http\Controllers\Api;

use App\Programa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    function pesquisar()
    {
        try {
            return response()->json(['programas' => Programa::get()]);
        } catch(\Exception $e) {
           return response()->json(['message' => 'Erro ao processar a requisição']);
        }
    }
}
