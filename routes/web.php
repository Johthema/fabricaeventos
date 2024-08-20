<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController; //Importar a EventController

//Nesta rota estou dizendo que vou utilizar o EventController e a rota index(action criada no EventControler.php) 
Route::get('/', [EventController::class, 'index']); //Rota para acessar a home
Route::get('/events/create', [EventController::class, 'create']); //Rota para acessar a pagina de criação de evento
Route::get('/events/{id}', [EventController::class, 'show']);
//Rota para enviar requisição de POST
Route::post('events',[EventController::class, 'store']);

Route::get('contatos', function(){
    return view('contato');
});

// Route::get('produtos', function(){
//     //No caso do usuário esta fazendo uma requisição de busca
//     $busca = request('procurar');

//     return view('produto', ['busca' => $busca]);
// });

// //A inserção da ? no id diz que ele pode aceitar any vindo do usuário
// //porém deve-se colocar o id=1 na função ou outro valor inicial  
// Route::get('produtos_teste/{id?}', function($id=1){
//      return view('produtoUso', ['id'=>$id]);
// });