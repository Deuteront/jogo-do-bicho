@extends('layout.app', ["current" => "palpites"])
@section('body')
<div class="row" style="margin-bottom: 25px">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header">
                <h4>Novo Palpite</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('palpites.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="jogadorId">Jogador</label>
                            <select id="jogadorId" name="jogadorId" class="form-control">
                                @foreach($jogadores as $jogador)
                                <option value="{{ $jogador['id'] }}">{{$jogador['nome'] }} - {{$jogador['cpf'] }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="animalId">Animal</label>
                            <select id="animalId" name="animalId" class="form-control">
                                @foreach($animais as $animal)
                                <option value="{{ $animal['id'] }}">
                                    {{ $animal['codigo_animal'] }} - {{ $animal['nome'] }} - |
                                    @foreach ($animal->valores_animais as $valoresAnimal)
                                    {{ $valoresAnimal->numero_para_sorteio }} |
                                    @endforeach
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2" style="margin-top: 30px;">
                            <div type="text">
                                <button type="submit" class="btn btn-success">Palpítar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-header">
                <h4>Ações Sorteios</h4>
            </div>
            <div class="card-body" style="align-self: center;">
                <form action="{{ route('sorteios.store') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Sortear Animal!!!!!!</button>
                </form>
                <a class="btn btn-warning">Sorteios Anteriores</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Palpites proximos Sorteios</h4>
            </div>
            <div class="card-body">
                <table style="border: 1px solid #dee2e6"
                       class="table table-bordered table-ordered table-hover table-striped">
                    <thead class="thead-light">
                    <tr>
                        <th>Nome / Telefone Jogador</th>
                        <th>Nome Animal</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($palpites) > 0)
                    @foreach($palpites as $palpite)
                    <tr>
                        <td>{{$palpite->jogador->nome}} / {{$palpite->jogador->cpf}}</td>
                        <td>{{$palpite->animal->nome}}</td>
                        <td class="d-flex">
                            <form style="margin: 0; align-self: center;"
                                  action="{{ route('palpites.destroy', $palpite['id']) }}"
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
                        <td colspan="30">Nenhum Palpite Cadastrado para o proximo Sorteio</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
