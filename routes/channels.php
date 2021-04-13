<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chatprivate-channel.{id}', function ($user, $id) {
    // $user = Usuario::find();
    if(session('id') == $id){
        return true;
    }else{
        return false;
    }
    // return (int) $user->id === (int) $id;
});
