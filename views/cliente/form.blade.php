@extends('app.layout')

@section('content')

    {{-- FORMULÁRIO UTILIZADO NO CADASTRO E NA EDIÇÃO DOS REGISTROS --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastro de Cliente
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            <form role="form" method="post">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Nome
                                        <input name="nome" value="{{ $cliente->nome }}" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Telefone
                                        <input name="telefone" value="{{ $cliente->telefone }}" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Documento
                                        <input name="documento" value="{{ $cliente->documento }}" class="form-control">
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