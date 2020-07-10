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

    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-md-8 boxContainer">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset('images/robo.png') }}" class="img-rounded" width="120">
                        </div>

                        <div class="col-md-9 col-sm-12 col-xs-12 text-center ">
                            <h1>Bom <b>{{ Session::get('user')['name'] ?? 'amigo(a)' }}</b>, agora o papo vai ficar sério...</h1>
                            <p>Diga o que você precisa saber, eu vou lhe responder!</p>
                        </div>

                        <div class="col-md-12 text-right">
                            <a href="{{ route('chat.sair') }}" style="color:red;">Sair do chat</a>
                        </div>


                        <chat :data-user="{{ Session::get('user') }}" />

                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>