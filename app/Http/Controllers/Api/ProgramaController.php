<?php

namespace App\Http\Controllers\Api;

use App\Programa;
use App\AssuntoPrograma;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgramaController extends Controller
{
	private function validation($data)
	{
		$rules = [
			'nome' => 'required',
			'banca_id' => 'required|integer',
			'orgao_id' => 'required|integer'
		];

		return Validator::make($data, $rules);
	}

    function cadastrar(Request $request)
    {
        try {
			$programa = $request->json()->all();
			$validation = $this->validation($request->all());

			if ($validation->fails()) {
				return response()->json(['mensagem' => 'Dados inválidos: ' . $validation->errors()], 422);
			}

            $programa = Programa::create($programa);

            foreach ($request->assuntos as $assunto) {
				$assuntoPrograma = new AssuntoPrograma();

				$assuntoPrograma->assunto_id = $programa->id;
				$assuntoPrograma->programa_id = $assunto;

                $assuntoPrograma->save();
			}

            return response()->json(['programa' => $programa], 201);
        } catch(\Exception $e) {
           return response()->json(['mensagem' => 'Erro ao processar a requisição: ' . $e->getMessage()], 500);
        }
    }

    function pesquisar()
    {
        try {
            return response()->json(['programas' => Programa::get()]);
        } catch(\Exception $e) {
           return response()->json(['error' => 'Erro ao processar a requisição: ' . $e->getMessage()], 500);
        }
    }
}
