<?php

namespace App\Http\Controllers;

use App\Models\Animais;
use App\Models\Jogadores;
use App\Models\Palpite;
use Illuminate\Http\Request;

class ControladorPalpites extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais = Animais::with('valores_animais')->get();
        $jogadores = Jogadores::all();
        $palpites = Palpite::with('animal', 'jogador')->where('sorteio_id', '=', null)->get();
        return view('palpites/palpite', compact('animais', 'jogadores', 'palpites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $palpite = new Palpite();
        $palpite->codigo_animal_id = $request->input('animalId');
        $palpite->jogador_id = $request->input('jogadorId');
        $palpite->save();
        return redirect('palpites');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prd = Palpite::find($id);
        if (isset($prd)) {
            $prd->delete();
        }
        return redirect('palpites');
    }
}
