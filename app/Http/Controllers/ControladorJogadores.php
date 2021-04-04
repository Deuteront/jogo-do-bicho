<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Jogadores;

use Illuminate\Http\Request;

class ControladorJogadores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prds = Jogadores::all();
        return view('jogadores/jogadores', compact('prds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jogadores/jogador-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function validar(Request $request)
    {
        $regras = [
            'nome' => 'required|min:2',
            'telefone' => 'required|min:11|max:11',
            'cpf' => 'required|min:11|max:11|unique:jogadores',
        ];
        $mensagens = [
            'required' => 'O atributo :attribute é obrigatório',
            'min' => 'O atributo :attribute é Muito Curto',
            'max' => 'O atributo :attribute Tá Grande ><',
            'unique' => 'Qualé, tá tentando clonar pessoa menó?',
        ];
        $request->validate($regras, $mensagens);
    }

    public function store(Request $request)
    {
        $this->validar($request);
        $prd = new Jogadores();
        $prd->nome = $request->input('nome');
        $prd->telefone = $request->input('telefone');
        $prd->cpf = $request->input('cpf');
        $prd->save();
        return redirect('jogadores');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jogador = Jogadores::find($id);
        if (isset($jogador)) {
            var_dump("ta chegando meno");
            return view('jogadores/jogador-update', ['jogador' => $jogador]);
        }
        return redirect('jogadores/jogadores');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validar($request);
        $prd = Jogadores::find($id);
        if (isset($prd)) {
            $prd->nome = $request->input('nome');
            $prd->telefone = $request->input('telefone');
            $prd->cpf = $request->input('cpf');
            $prd->save();
        }
        return redirect('jogadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prd = Jogadores::find($id);
        if (isset($prd)) {
            $prd->delete();
        }
        return redirect('jogadores');
    }
}
