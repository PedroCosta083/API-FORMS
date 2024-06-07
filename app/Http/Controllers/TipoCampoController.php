<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoCampo;

class TipoCampoController extends Controller
{
    public function create(Request $request)
    {
        $tipo = TipoCampo::create([
            'nome' => $request->nome,
            'descricao' => $request->rotulo,
        ]);
        return response()->json(['mensagem' => 'tipo criado com sucesso!', 'tipo' => $tipo]);
    }

    public function getAll()
    {
        $tipo = TipoCampo::all();
        return response()->json($tipo);
    }

    public function getById($id)
    {
        $tipo = TipoCampo::find($id);

        if (!$tipo) {
            return response()->json(['mensagem' => 'tipo não encontrado'], 404);
        }

        return response()->json($tipo);
    }

    public function update(Request $request, $id)
    {
        $tipo = TipoCampo::find($id);
        if (!$tipo) {
            return response()->json(['mensagem' => 'tipo não encontrado'], 404);
        }

        $tipo->update([
            'nome' => $request->nome,
            'descricao' => $request->rotulo,
        ]);

        return response()->json(['mensagem' => 'Tipo atualizado com sucesso!', 'tipo' => $tipo]);
    }


    public function destroy($id)
    {
        $tipo = TipoCampo::find($id);
        if (!$tipo) {
            return response()->json(['mensagem' => 'tipo não encontrado'], 404);
        }
        $tipo->delete();
        return response()->json(['mensagem' => 'tipo excluído com sucesso!']);
    }
}
