@extends('layouts.app')
@section('tela-nome', 'Enviar Messagem '.session('id'))
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div style="width:600px;">
                    <form method="post" action="{{route('send.messages')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="titulo" placeholder="Titulo"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <textarea name="msg" placeholder="Conteudo" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="number" name="user_id" class="form-control" placeholder="ID"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="hidden" name="remetente" class="form-control" placeholder="Titulo" value="{{session('id')}}"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <input type="submit" class="btn btn-success" value="Enviar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection