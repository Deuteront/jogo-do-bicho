@extends('layout.app', ["current" => "palpites"])
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Sorteios</h4>
    </div>
    <div class="card-body">
        <div style="margin-top: 10px;">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">
                        Data
                    </th>
                    <th>
                        Numero Sorteado / Animal Representado
                    </th>
                    <th>
                        Ações
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(count($sorteios) > 0)
                @foreach($sorteios as $sorteio)
                <tr>
                    <td>{{ $sorteio->data_sorteio }}</td>
                    <td>{{ $sorteio->numero_animal_sorteado_id }} / {{ $sorteio->animal->nome }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route ('sorteios.show', $sorteio['id']) }}">Ganhadores</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="30">Nenhum Sorteio Aconteceu</td>
                </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
