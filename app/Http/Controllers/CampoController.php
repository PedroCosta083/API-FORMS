<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campo; // Certifique-se de importar o modelo Campo
use App\Models\TipoCampo; // Certifique-se de importar o modelo TipoCampo

class CampoController extends Controller
{

    public function __construct()
    {
        // Não é necessário passar instâncias dos modelos como parâmetros no construtor
    }

    public function create(Request $request)
    {
        // Validando os dados recebidos
        $request->validate([
            'nome' => 'required|string',
            'rotulo' => 'required|string',
            'formularioId' => 'required|integer', // Renomeado para conformar com o nome do campo no request
            'tipoCampoId' => 'required|integer', // Renomeado para conformar com o nome do campo no request
        ]);

        // Criando um novo campo com os dados recebidos
        $campo = Campo::create([
            'nome' => $request->nome,
            'rotulo' => $request->rotulo,
            'formularios_id' => $request->formularioId,
            'tipos_campos_id' => $request->tipoCampoId,
        ]);

        // Retorna uma resposta de sucesso
        return response()->json(['mensagem' => 'Campo criado com sucesso!', 'campo' => $campo]);
    }

    public function getAll()
    {
        // Busca todos os campos do banco de dados
        $campos = Campo::all();

        // Retorna os campos em formato JSON
        return response()->json($campos);
    }

    public function getById($id)
    {
        // Busca o campo do banco de dados
        $campo = Campo::find($id);

        if (!$campo) {
            return response()->json(['mensagem' => 'Campo não encontrado'], 404);
        }

        // Retorna o campo em formato JSON
        return response()->json($campo);
    }

    public function update(Request $request, $id)
    {
        // Validando os dados recebidos
        $request->validate([
            'nome' => 'string',
            'rotulo' => 'string',
            'formularioId' => 'integer', // Renomeado para conformar com o nome do campo no request
            'tipoCampoId' => 'integer', // Renomeado para conformar com o nome do campo no request
        ]);

        // Busca um campo específico pelo ID
        $campo = Campo::find($id);

        // Verifica se o campo foi encontrado
        if (!$campo) {
            return response()->json(['mensagem' => 'Campo não encontrado'], 404);
        }
        $tipoCampoAntigo = $campo->tipos_campos_id;
        // Atualiza os dados do campo
        $campo->update([
            'nome' => $request->nome,
            'rotulo' => $request->rotulo,
            'formularios_id' => $request->formularioId,
            'tipos_campos_id' => $request->tipoCampoId,
        ]);

        // exclua as opções de campo relacionadas ao tipo de campo antigo
        $tiposQueExcluemOpcoes = ['1', '5', '7'];
        if (in_array($request->tipoCampoId, $tiposQueExcluemOpcoes)) {
            $campo->opcoesCampos()->delete();
        }
        return response()->json(['mensagem' => 'Campo atualizado com sucesso!', 'campo' => $campo]);
    }


    public function destroy($id)
    {
        // Busca um campo específico pelo ID
        $campo = Campo::find($id);

        // Verifica se o campo foi encontrado
        if (!$campo) {
            return response()->json(['mensagem' => 'Campo não encontrado'], 404);
        }

        // Exclui o campo do banco de dados
        $campo->delete();

        // Retorna uma resposta de sucesso
        return response()->json(['mensagem' => 'Campo excluído com sucesso!']);
    }

}
