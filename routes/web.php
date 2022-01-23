<?php

use App\Http\Controllers\BugsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Models\Bugs;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//Rotas para os bugs
Route::get('/bugs/novo', [BugsController::class, "create" ]);
Route::post('/bugs/novo', [BugsController::class, "store" ])->name('registrar_bug');
Route::get('/bugs/exibir/{id}', [BugsController::class, "show" ]);
Route::get('/bugs/editar/{id}', [BugsController::class, "edit" ]);
Route::post('/bugs/editar/{id}', [BugsController::class, "update" ])->name('alterar_bug');
Route::get('/bugs/excluir/{id}', [BugsController::class, "delete" ]);
Route::post('/bugs/excluir/{id}', [BugsController::class, "destroy" ])->name('excluir_bug');

//Rotas para os usuarios
Route::get('/usuarios/novo', [UsuariosController::class, "create" ]);
Route::post('/usuarios/novo', [BugsController::class, "store" ])->name('registrar_usuario');
Route::get('/usuarios/exibir/{id}', [UsuariosController::class, "show" ]);
Route::get('/usuarios/editar/{id}', [UsuariosController::class, "edit" ]);
Route::post('/usuarios/editar/{id}', [UsuariosController::class, "update" ])->name('alterar_usuario');
Route::get('/usuarios/excluir/{id}', [UsuariosController::class, "delete" ]);
Route::post('/usuarios/excluir/{id}', [UsuariosController::class, "destroy" ])->name('excluir_usuario');