<html>
    <head>
        <title>Realtime</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="{{mix('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Tela - @yield('tela-nome')</h3>
                </div>
            </div>
        </div>
        <div style="margin-top: 30px"></div>
        @yield('conteudo')
    </body>
</html>