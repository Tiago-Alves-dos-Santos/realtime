<?php

namespace App\Http\Controllers;

use App\Message;
use App\Usuario;
use App\Events\PrivateEvent;
use Illuminate\Http\Request;

class RealtimeC extends Controller
{
    public function createSessionLogin(Request $request)
    {
        $usuario = Usuario::find($request->id);
        session(['id' => $request->id]);
        return redirect()->route('homes');
        
    }

    public function sendMessages(Request $request)
    {
        $message = Message::create([
            "titulo" => $request->titulo,
            "msg" => $request->msg,
            "user_id" => $request->user_id,
            "remetente" => $request->remetente
        ]);
        $message = $message->fresh(); 
        broadcast(new PrivateEvent($message));
        return redirect()->route('send.message');
    }

    public function showMessages(Request $request)
    {
        $messages = Message::where('user_id', $request->user_id)
        ->where('remetente', $request->remetente)->get();
        $usuario = Usuario::find($request->remetente);
        return view('include.message', compact('messages','usuario'));
    }

}
