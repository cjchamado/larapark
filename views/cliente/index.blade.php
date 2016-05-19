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
                    Clientes
                    <a href="{{ route('cliente_create') }}">
                        Cadastrar
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
                                <td>
                                    <a href="{{ route('cliente_update',['id' => $cliente->id]) }}">
                                        Editar
                                    </a>
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