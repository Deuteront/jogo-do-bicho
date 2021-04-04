@extends('layout.app', ["current" => "jogadores"])
@section('body')
<div class="card">
    <div class="card-header">
        <h4>Jogadores Cadastrados</h4>
    </div>
    <div class="card-body">
        <table style="border: 1px solid #dee2e6" class="table table-bordered table-ordered table-hover table-striped">
            <thead class="thead-light">
            <tr>
                <th class="text-center">Código</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @if(count($prds) > 0)
            @foreach($prds as $prd)
            <tr>
                <td class="text-center">{{$prd->id}}</td>
                <td>{{$prd->nome}}</td>
                <td>{{$prd->telefone}}</td>
                <td>{{$prd->cpf}}</td>
                <td class="d-flex">
                    <a href="{{ route('jogadores.edit', $prd['id']) }}" style="margin-right: 5px"
                       class="fas fa-user-edit btn text-dark border"></a>
                    <form style="margin: 0; align-self: center;" action="{{ route('jogadores.destroy', $prd['id']) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fas fa-trash-alt btn text-dark border">
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="30">Nenhum jogador Cadastrado</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/jogadores/create" class="btn btn-primary" role="button">Novo Jogador</a>
    </div>
</div>
@endsection
