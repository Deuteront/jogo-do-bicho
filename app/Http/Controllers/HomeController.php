<?php

namespace App\Http\Controllers;

use App\Models\Animais;
use App\Models\Sorteios;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $animais = Animais::with('valores_animais')->get();
        return view('jogo-do-bicho', compact('animais'));
    }
}
