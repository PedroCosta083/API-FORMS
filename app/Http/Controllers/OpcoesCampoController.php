<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcoesCampoController extends Controller
{

    public function create(Request $request)
    {
        $opcao = OpcaoCampo::create([
            'valor' => $request->nome,
            'rotulo' => $request->rotulo,
            'campos_id' => $request->campoId,
        ]);
        return response()->json(['mensagem' => 'Opção criada com sucesso!', 'opcao' => $opcao]);
    }

    public function getAll()
    {
        $opcoes = OpcaoCampo::all();
        return response()->json($opcoes);
    }

    public function getById($id)
    {
        $opcao = OpcaoCampo::find($id);

        if (!$opcao) {
            return response()->json(['mensagem' => 'Opção não encontrada'], 404);
        }

        return response()->json($opcao);
    }

    public function update(Request $request, $id)
    {
        $opcao = OpcaoCampo::find($id);
        if (!$opcao) {
            return response()->json(['mensagem' => 'Opção não encontrada'], 404);
        }

        $opcao->update([
            'valor' => $request->nome,
            'rotulo' => $request->rotulo,
            'campos_id' => $request->formularioId,
        ]);

        return response()->json(['mensagem' => 'Campo atualizado com sucesso!', 'campo' => $opcao]);
    }


    public function destroy($id)
    {
        $opcao = OpcaoCampo::find($id);
        if (!$opcao) {
            return response()->json(['mensagem' => 'Opção não encontrada'], 404);
        }
        $opcao->delete();
        return response()->json(['mensagem' => 'Opção excluída com sucesso!']);
    }
}
