<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function create(Request $request)
    {
        $formulario = Formulario::create([
            'titulo' => $request->nome,
            'descricao' => $request->descricao,
        ]);
        return response()->json(['mensagem' => 'Formulario criado com sucesso!', 'formulario' => $formulario]);
    }

    public function getAll()
    {
        $formularios = Formulario::all();
        return response()->json($formularios);
    }
    public function getById($id)
    {
        $formulario = Formulario::find($id);

        if (!$formulario) {
            return response()->json(['mensagem' => 'Formulario não encontrado'], 404);
        }

        return response()->json($formulario);
    }
    public function update(Request $request, $id)
    {
        $formulario = formulario::find($id);
        if (!$formulario) {
            return response()->json(['mensagem' => 'Formulario não encontrado'], 404);
        }

        $formulario->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ]);
        return response()->json(['mensagem' => 'Formulario atualizado com sucesso!', 'formulario' => $formulario]);
    }
    public function destroy($id)
    {
        $formulario = Formulario::find($id);
        if (!$formulario) {
            return response()->json(['mensagem' => 'Formulario não encontrado'], 404);
        }
        $formulario->delete();
        return response()->json(['mensagem' => 'Formulario excluído com sucesso!']);
    }

}
