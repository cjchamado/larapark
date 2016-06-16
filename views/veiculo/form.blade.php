@extends('app.layout')

@section('content')

    {{-- FORMULÁRIO UTILIZADO NO CADASTRO E NA EDIÇÃO DOS REGISTROS --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastro de Veiculo
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form role="form" method="post">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Cliente
                                        <select name="cliente" class="form-control">
                                            @foreach($clientes as $cliente)
                                                <option value="{{ $cliente->id }}">
                                                    {{ $cliente->nome }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Placa
                                        <input name="placa" value="{{ $veiculo->placa }}" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Marca
                                        <input name="marca" value="{{ $veiculo->marca }}" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Modelo
                                        <input name="modelo" value="{{ $veiculo->modelo }}" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Cor
                                        <input name="cor" value="{{ $veiculo->cor }}" class="form-control">
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-default">
                                    Salvar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection