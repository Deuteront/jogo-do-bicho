@extends('layout.app', ["current" => "home"])
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Bem Vindo ao jogo do Bicho!!!</h4>
    </div>
    <div class="card-body">
        <p>O que é o "Jogo do Bicho"?</p>
        <span>É um jogo criado no Rio de Janeiro em 1892 para promover um zoológico da cidade, porém ele possuiu uma
        popularização muito alta, e no ano seguinte foi classificado como jogo de azar e proibido sua jogatina no
        Brasil.</span>
        <div style="margin-top: 10px;">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">
                        Número Animal
                    </th>
                    <th>
                        Animal
                    </th>
                    <th>
                        Valores do Sorteio
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($animais as $animal)
                <tr>
                    <td class="text-center">{{$animal->codigo_animal}}</td>
                    <td>
                        <a href="https://www.google.com/search?q={{$animal->nome}}"
                           target="_blank">{{$animal->nome}}</a>
                    </td>
                    <td>
                        @foreach ($animal->valores_animais as $valoresAnimal)
                        {{ $valoresAnimal->numero_para_sorteio }}
                        @endforeach
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
