<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function index()
    {
        return response()->json(Jogador::all());
    }

    public function show($id)
    {
        $jogador = Jogador::find($id);

        if (!$jogador) {
            return response()->json('Jogador não encontrado');
        }
        return response()->json($jogador);
    }

    public function store(Request $request)
    {
        $jogador = Jogador::create([
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'modalidade' => $request->modalidade,
            'nacionalidade' => $request->modalidade
        ]);

        return response()->json($jogador);
    }

    public function update(Request $request)
    {
        $jogador = Jogador::find($request->id);

        if (!$jogador) {
            return response()->json('Jogador não encontrado');
        }

        if (isset($request->nome)) {
            $jogador->nome = $request->nome;
        }

        if (isset($request->data_nascimento)) {
            $jogador->data_nascimento = $request->data_nascimento;
        }

        if (isset($request->modalide)) {
            $jogador->modalidade = $request->modalidade;
        }

        if (isset($request->nacionalidade)) {
            $jogador->nacionalidade = $request->nacionalidade;
        }

        $jogador->update();

        return response()->json($jogador);
    }

    public function delete($id) {
        $jogador = Jogador::find($id);

        if(!$jogador) {
            return response()->json('Jogador não encontrado');
        }

        $jogador->delete();

        return response()->json('Jogador deletado com sucesso');
    }
}
