<?php

namespace App\Http\Controllers;

use App\Models\Animais;
use App\Models\Jogadores;
use App\Models\Palpite;
use App\Models\Sorteios;
use App\Models\ValoresAnimais;
use Illuminate\Http\Request;

class ControladorSorteios extends Controller
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
        return view('sorteios/sorteio', compact('animais', 'jogadores', 'palpites'));
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
     * @return void
     */
    public function store()
    {
        $numeroSorteado = mt_rand(0, 99);
        $valorAnimalSorteado = ValoresAnimais::with('animal')->where('numero_para_sorteio', '=', $numeroSorteado)->get();
        $animal = $valorAnimalSorteado[0]->animal;
        $sorteio = new Sorteios();
        $sorteio->animal_id = $valorAnimalSorteado[0]->codigo_animal_id;
        $sorteio->data_sorteio = date("Ymd");
        $sorteio->save();
        $palpites = Palpite::with('animal', 'jogador')->where('sorteio_id', '=', null)->get();
        if (isset($palpites)) {
            foreach ($palpites as $palpite) {
                $palpite->sorteio_id = $sorteio->id;
                $palpite->save();
            }
        }
        $ganhadores = [];
        foreach ($palpites as $palpite) {
            if ($palpite->codigo_animal_id === $sorteio->animal_id) {
                $palpite->jogador->animal = $palpite->animal;
                array_push($ganhadores, $palpite->jogador);
            }
        }
        return view('sorteios/ganhador', compact('sorteio', 'palpites', 'ganhadores', 'animal'));

    }

    public function palpitar(Request $request)
    {
        //
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
        //
    }
}
