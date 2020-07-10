<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Suporte Silvia</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 boxContainer">
                <div class="row">
                    <div class="col-md-1 col-sm-12 col-xs-12 text-center">
                        <img src="{{ asset('images/robo.png') }}" class="img-rounded" width="120">
                    </div>

                    <div class="col-md-11 col-sm-12 col-xs-12 text-center ">
                        <h1>Olá, meu nome é Silvia, posso lhe conhecer ?</h1>
                        <p>Preciso saber com quem vou conversar</p>
                    </div>

                    <div class="form">
                        <h2>Identificar-se:</h2>

                        <form action="{{ route('home.store') }}" method="POST" class="row">
                            @csrf

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Seu CPF:</label>
                                    <input type="number" class="form-control" placeholder="Apenas números" name="cpf" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Seu Nome:</label>
                                    <input type="text" class="form-control" placeholder="Nome" name="name" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Seu E-mail:</label>
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-warning"> Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>