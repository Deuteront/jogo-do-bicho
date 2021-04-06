@extends('layout.app', ["current" => "home"])
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
                    <td>{{ $sorteio->data }}</td>
                    <td>{{ $sorteio->numero_sorteado->numero_sorteado }} / {{ $sorteio->animal->nome }}</td>
                    <td>{{ $sorteio->telefone }}</td>
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
