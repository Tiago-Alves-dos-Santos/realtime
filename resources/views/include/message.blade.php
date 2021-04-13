<div style="width:400px;">
    @foreach ($messages as $message)
    <p>
        <strong>Mensagem: {{$message->msg}}</strong>
    </p>
    <h3><strong>Titulo: {{$message->titulo}}</strong> </h3>
    <h4><strong>Remetente ID:{{$message->remetente}}</strong></h4>
    <h4><strong>Remetente Nome:{{$usuario->nome}}</strong></h4>
    @endforeach
</div>