@extends('app.layout')

@section('header')
    Veiculos
@endsection

@section('content')

    {{-- TELA UTILIZADA NA APRESENTAÇÃO DOS REGISTROS --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-primary" href="{{ route('veiculo_create') }}">
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
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Cor</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($veiculos as $veiculo)

                            <tr>
                                <td> {{ $veiculo->id }} </td>
                                <td> {{ $veiculo->placa }} </td>
                                <td> {{ $veiculo->marca }} </td>
                                <td> {{ $veiculo->modelo }}  </td>
                                <td> {{ $veiculo->cor }}  </td>
                                <td class="col-md-3">
                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-default" href="{{ route('veiculo_update',['id' => $veiculo->id]) }}">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('veiculo_delete',['id' => $veiculo->id]) }}">
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