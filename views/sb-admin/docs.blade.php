@extends($layout)

@section($sections['header'])
    Laravel 5 &mdash; Referência rápida
@endsection

@section($sections['content'])

    <div class="row">
        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    Conectando com o banco de dados MySQL
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Localize e abra o arquivo .env de seu projeto <br/>
                                    Ele deve possuir uma estrutura similar a esta: <br/>

                                    <p style="background: #f7f7f7; color: #555; padding: .5rem;">
                                        APP_ENV=local <br/>
                                        APP_DEBUG=true <br/>
                                        APP_KEY=base64:VP3ltOFUgCjNABCHDYEHMiojovF8dYa8zy4eu6LzsKdBR498M= <br/>
                                        APP_URL=http://localhost <br/> <br/>

                                        <span style="color: #222; display: block">
                                        DB_CONNECTION=mysql <br/>
                                        DB_HOST=127.0.0.1 <br/>
                                        DB_PORT=3306 <br/>
                                        DB_DATABASE=homestead <br/>
                                        DB_USERNAME=homestead <br/>
                                        DB_PASSWORD=homestead <br/> <br/>
                                        </span>

                                        CACHE_DRIVER=file <br/>
                                        SESSION_DRIVER=file <br/>
                                        QUEUE_DRIVER=sync <br/> <br/>

                                        REDIS_HOST=127.0.0.1 <br/>
                                        REDIS_PASSWORD=null <br/>
                                        REDIS_PORT=6379 <br/> <br/>

                                        MAIL_DRIVER=smtp <br/>
                                        MAIL_HOST=mailtrap.io <br/>
                                        MAIL_PORT=2525 <br/>
                                        MAIL_USERNAME=null <br/>
                                        MAIL_PASSWORD=null <br/>
                                        MAIL_ENCRYPTION=null <br/> <br/>
                                    </p>

                                    <p>
                                        Localize a seção em destaque acima: DB_CONNECTION=mysql
                                    </p>

                                    <p>
                                        Configure as informações de conexão conforme a estrutura
                                    </p>

                                    <p>
                                        <i>
                                        Reinicie seu ambiente de desenvolvimento do Laravel com o comando: php artisan serve
                                        </i>
                                    </p>

                                </td>
                            </tr>

                            <tr>
                                <th>
                                    Gerando uma Controller com o artisan
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Comando:
                                        <strong> php artisan make:controller MinhaController </strong>
                                        &mdash; Gera uma classe Controller padrão no diretório app/Http/Controllers
                                        <br/>
                                        <i>Minha</i> deve ser susbituído pelo nome desejado
                                    </p>
                                </td>
                            </tr>


                            <tr>
                                <th>
                                    Gerando um novo Model com o artisan
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Comando:
                                        <strong> php artisan make:model </strong>
                                        &mdash; Gera somente o Model
                                    </p>
                                    <p>
                                        Comando:
                                        <strong> php artisan make:model -m </strong> &mdash;
                                        Gera o Model + o arquivo migration necessário para manipular a estrutura da tabela
                                    </p>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>

@endsection