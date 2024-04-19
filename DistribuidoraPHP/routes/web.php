<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\LogisticaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas da Web
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas da web para sua aplicação. Estas
| rotas são carregadas pelo RouteServiceProvider e todas elas serão atribuídas
| ao grupo de middleware "web". Faça algo ótimo!
|
*/

Route::get('/', [ClienteController::class, 'showHomeClie'])->name('homeClie');
Route::get('/cadastrar-pedido',[ClienteController::class,'showCadastrarPedido'])->name('show-cadastrar-pedido');

Route::get('/homeLog', [LogisticaController::class, 'showHomeLog'])->name('homeLog');

Route::get('/homeAdm', [AdministradorController::class, 'showHomeAdm'])->name('homeAdm');
