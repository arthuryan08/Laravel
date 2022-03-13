<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/config', [ConfigController::class, 'index']);
Route::get('/config/user', [ConfigController::class, 'user']);


















/*
Route::view('/teste', 'teste');

//Agrupando Rotas (exemplos rotas só do /admin)
Route::prefix('/config')->group(function(){

    Route::get('/', function(){
        return view('config');
    });

    Route::get('info', function(){
        echo "Configurações INFO 2";
    });

    Route::get('permissoes', function(){
        echo "Configurações PERMISSÕES 2";
    });
});


*/
//Nomeando rotas
/*
Route::get('/config', function () {
    
    return redirect()->route('permissoes');

    return view('config');
});

Route::get('/config/info', function () {
    echo "Configurações INFO";
})->name('info');

Route::get('/config/permissoes', function () {
    echo "Configurações PERMISSÕES";
})->name('permissoes');
*/

// Route::redirect('/', '/teste');

//Rotas com parâmetros
/*
Route::get('/noticia/{slug}', function ($slug) {
    echo "Slug: " . $slug;
});

Route::get('/noticia/{slug}/comentario/{id}', function ($slug, $id) {
    echo 'Mostrando o comentário ' . $id . ' da notícia ' . $slug;
});

//Rotas com regex + Provider
Route::get('/user/{name}', function ($name) {
    echo "Mostrando usuário de NOME " . $name;
})->where('name', '[a-z]+');  //Expressão regular que vai validar apenas letras, o que vai validar essa rota (regex)

Route::get('/user/{id}', function ($id) {
    echo "Mostrando usuário ID " . $id; //Rota sendo validada pelo padrão criado em Providers
});
*/

//Fallback 404 (ter controle sobre as rotas e paginas não encontradas)
/*
Route::fallback(function(){
    return view('404');
});
*/