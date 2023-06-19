<?php

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

use App\Http\Controllers\VivaController;

Route::get('/', [VivaController::class, 'index']);

Route::get('/dashboard', [VivaController::class, 'dashboard'])->middleware('auth');

Route::get('/rede-trocas', [VivaController::class, 'redeTrocas']);

Route::get('/pagina/{id}', [VivaController::class, 'showPage']);

Route::get('/noticias', [VivaController::class, 'noticias']);
Route::get('/noticia/{id}', [VivaController::class, 'showNews']);

Route::get('/projetos/realizados', [VivaController::class, 'projetos_realizados']);
Route::get('/projetos/viva', [VivaController::class, 'projetos_viva']);
Route::get('/projetos/cia', [VivaController::class, 'projetos_cia']);
Route::get('/projetos/andamento', [VivaController::class, 'projetos_andamento']);

Route::get('/cursos', [VivaController::class, 'cursos']);
Route::get('/curso/{id}', [VivaController::class, 'curso']);
Route::post('/curso/{id}', [VivaController::class, 'curso_inscricao'])->middleware('auth');
Route::get('/curso/aula/{id}', [VivaController::class, 'aula'])->middleware('auth');

Route::get('/colunas', [VivaController::class, 'colunas']);
Route::get('/colunas/{id}', [VivaController::class, 'showColunas']);

Route::get('/envie-sua-noticia/create', [VivaController::class, 'envieSuaNoticia'])->middleware('auth');
Route::post('/envie-sua-noticia', [VivaController::class, 'store_post'])->middleware('auth');

Route::get('/contato', [VivaController::class, 'contato']);
Route::post('/contato', [VivaController::class, 'contato_store']);

Route::get('/imprensa', [VivaController::class, 'imprensa']);
Route::get('/imprensa/frame', [VivaController::class, 'frame_imprensa']);

Route::get('/nossos-numeros', [VivaController::class, 'numeros']);

Route::get('/faq', [VivaController::class, 'faq']);

Route::get('/teste', [VivaController::class, 'teste']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
