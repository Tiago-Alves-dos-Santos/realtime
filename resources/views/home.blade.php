@extends('layouts.app')
@section('tela-nome', 'Home session ->'. session('id'))
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" id="conteudo">
                <div style="width:400px;">
                    <p>
                        <strong>Mensagem:</strong>
                    </p>
                    <h3><strong>Titulo:</strong> </h3>
                    <h4><strong>Remetente ID:</strong></h4>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.Echo.channel("chatprivate-channel.{{session('id')}}")
       .listen('PrivateEvent', (e) => {
           console.log(e);
           console.log(e.mensagem);    
           $.ajax({
               'type':'POST',
               url:"{{route('ajax.chat')}}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'user_id': e.mensagem.user_id,
                    'remetente': e.mensagem.remetente
                },
                success: function (a) {
                    $("#conteudo").empty().html(a);
                },
                error: function (erro) {
                    console.log(erro);
                }
           });
       })
   </script>
@endsection