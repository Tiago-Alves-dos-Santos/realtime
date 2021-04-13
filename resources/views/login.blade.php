@extends('layouts.app')
@section('tela-nome', 'Login')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div style="width:600px;">
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="number" name="id" class="form-control" placeholder="ID"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <input type="submit" class="btn btn-success" value="Criar || Entrar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
         window.Echo.channel('eventoteste')
        .listen('EventoTest', (e) => {
            console.log(e);
            console.log(e.mensagem);  
        })
    </script>
@endsection
    