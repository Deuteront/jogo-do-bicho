@extends('layout.app', ["current" => "jogadores"])
@section('body')
<form action="{{ route('jogadores.update', $jogador['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-header">
            <h4>Atualizar Jogador</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogador->nome }}"
                           id="nome" placeholder="Informe o Nome...">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefone">Número Telefonico</label>
                    <input type="text" class="form-control cel-sp-mask" name="telefone" value="{{ $jogador->telefone }}"
                           id="telefone" placeholder="Informe o Número Telefonico...">
                </div>
                <div class="form-group col-md-4">
                    <label for="cpf">CPF</label>
                    <input id="cpf" type="text" class="form-control cpf-mask" name="cpf" value="{{ $jogador->cpf }}"
                           placeholder="Informe o CPF do Jogador...">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-success" value="Atualizar">
            <a href="/jogadores" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
</form>
@if($errors->any())
<div class="card-footer">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
</div>
@endif
@endsection
