<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function __construct(Formulario $formularios)
    {
        $this->formulario = $formularios;
        $this->campos = new Campo;
    }

    public function create()
    {
        $categorias = $this->categorias;
        $tipos_telefones = $this->tipos_telefones;

    }
    public function store(Request $request)
    {
        $contato = $this->contatos->create([
            'nome' => $request->nome,
        ]);

        $contato_id = $contato->id;
        $this->enderecos->create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'contato_id' => $contato_id,
        ]);

        for ($i = 0; $i < count($request->telefone); $i++) {
            $this->telefones->create([
                'numero' => $request->telefone[$i],
                'contato_id' => $contato_id,
                'tipo_telefone_id' => $request->tipotelefone[$i],
            ]);
        }


        $contato->categoriaRelationship()->attach($request->categoria);

        return redirect()->route('contato.index');
    }

    public function show($id)
    {
        $form = 'disabled';
        $contato = $this->contatos->find($id);
        $categorias = $this->categorias;
        $tipos_telefones = $this->tipos_telefones;
        return view('contato.form', compact('categorias', 'tipos_telefones', 'form', 'contato'));
    }
    public function edit($id)
    {
        $contato = $this->contatos->find($id);
        $categorias = $this->categorias;
        $tipos_telefones = $this->tipos_telefones;

        return view('contato.form', compact('categorias', 'tipos_telefones', 'contato'));
    }
    public function update(Request $request, $id)
    {
        $contato = $this->contatos->find($id);
        $contato->update([
            'nome' => $request->nome,
        ]);

        $endereco = $this->enderecos->find($contato->endereco->id);
        $endereco->update([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'contato_id' => $id,
        ]);
        for ($i = 0; $i < count($request->telefone); $i++) {
            if (isset($contato->telefone[$i])) {
                $contato->telefone[$i]->update([
                    'numero' => $request->telefone[$i],
                    'tipo_telefone_id' => $request->tipotelefone[$i],
                    'contato_id' => $id
                ]);
            } else {
                $this->telefones->create([
                    'numero' => $request->telefone[$i],
                    'tipo_telefone_id' => $request->tipotelefone[$i],
                    'contato_id' => $id
                ]);
            }
        }
        $contato->categoriaRelationship()->sync($request->categoria);
        return redirect()->route('contato.show', [$id]);
    }
    public function destroy($id)
    {
        $contato = $this->contatos->find($id);
        $contato->categoriaRelationship()->detach();
        $contato->enderecoRelationship()->delete();
        $contato->telefoneRelationship()->delete();
        $contato->delete();
        return redirect()->route('contato.index');
    }
    public function excluirCampo($id)
    {
        $telefone = $this->telefones->find($id);
        if (!$telefone) {
            return response()->ms(['message' => 'Telefone não encontrado.'], 404);
        }
        $telefone->delete();
        return redirect()->route('contato.edit', [$telefone->contato_id]);
    }

}
