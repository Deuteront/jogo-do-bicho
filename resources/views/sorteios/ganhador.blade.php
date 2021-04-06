@extends('layout.app', ["current" => "palpites"])
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Ganhadores Sorteio: {{ $sorteio->data_sorteio }} - {{ $animal->nome }}</h4>
    </div>
    <div class="card-body">
        <div style="margin-top: 10px;">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">
                        Nome
                    </th>
                    <th>
                        CPF
                    </th>
                    <th>
                        Telefone
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(count($ganhadores) > 0)
                @foreach($ganhadores as $ganhador)
                <tr>
                    <td>{{ $ganhador->nome }}</td>
                    <td>{{ $ganhador->cpf }}</td>
                    <td>{{ $ganhador->telefone }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="30">Nenhum Ganhador neste sorteio</td>
                </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card" style="margin-top: 20px">
    <div class="card-header">
        <h4>Palpites Do Sorteio</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center">
                    Nome
                </th>
                <th>
                    CPF
                </th>
                <th>
                    Telefone
                </th>
                <th>
                    Animal
                </th>
            </tr>
            </thead>
            <tbody>
            @if(count($palpites) > 0)
            @foreach($palpites as $palpite)
            <tr>
                <td>{{ $palpite->jogador->nome }}</td>
                <td>{{ $palpite->jogador->cpf }}</td>
                <td>{{ $palpite->jogador->telefone }}</td>
                <td>{{ $palpite->animal->nome }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="30">Nenhum palpite neste Sorteio</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
