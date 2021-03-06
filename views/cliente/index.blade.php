@extends('app.layout')

@section('header')
    Clientes
@endsection

@section('content')

    {{-- TELA UTILIZADA NA APRESENTAÇÃO DOS REGISTROS --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-primary" href="{{ route('cliente_create') }}">
                        <i class="fa fa-plus"></i> Cadastrar
                    </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Telefone</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($clientes as $cliente)

                            <tr>
                                <td> {{ $cliente->id }} </td>
                                <td> {{ $cliente->nome }} </td>
                                <td> {{ $cliente->documento }} </td>
                                <td> {{ $cliente->telefone }}  </td>
                                <td class="col-md-3">
                                    <div class="btn-group btn-group-justified">
                                    <a class="btn btn-default" href="{{ route('cliente_update',['id' => $cliente->id]) }}">
                                        <i class="fa fa-pencil"></i> Editar
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('cliente_delete',['id' => $cliente->id]) }}">
                                        <i class="fa fa-trash"></i> Excluir
                                    </a>
                                    </div>
                                </td>
                            </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

@endsection