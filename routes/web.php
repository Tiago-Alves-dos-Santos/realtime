<?php

use Illuminate\Database\Eloquent\SoftDeletes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('login');
})->name('view.login');

Route::post('/realizar-login', 'RealtimeC@createSessionLogin')->name('login');

Route::get('/evento', function () {
    broadcast(new \App\Events\EventoTest('Pagina evento carregada'));
    return 'Pagina evento';
})->name('evento');

Route::get('/home', function () {
    return view('home');
})->name('homes');


Route::get('/sendMessage', function () {
    return view('sendMessage');
})->name('send.message');

Route::post('/sending', 'RealtimeC@sendMessages')->name('send.messages');


Route::post('/ajax-chat', 'RealtimeC@showMessages')->name('ajax.chat');

// Route::get('/start', function(){
//     \App\Usuario::create([
//         "nome" => "celular"
//     ]);
// });