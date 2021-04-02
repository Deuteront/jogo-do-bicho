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
        <table>
            <thead>
            <tr>
                <th>
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


            </tbody>
        </table>
    </div>
    <div class="card-footer">

    </div>
</div>

@endsection
