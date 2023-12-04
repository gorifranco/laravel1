<?php

use App\Http\Controllers\AutorController;
use App\Models\Autor;
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
    return view('welcome');
});
//Route::group(['prefix'=>'autors'], function() {
//
//Route::get('/', [AutorController::class, 'index']);
//Route::get('/{id}', [AutorController::class, 'show']);
//});

Route::group(
    ['prefix' => 'autors'],
    // CRUD de la taula editors. Feim servir controladors.
    function () {
        // llista totes les editorials
        Route::get('',[AutorController::class, 'index'])->name("autors.index");

        Route::get('/create', function () {
            return "CREAR";
        })->name('autors.create');

        // Edita la editorial id
        Route::get('/{id}',[AutorController::class,'update'])->name('autors.edit');

        // Esborra la editarial id
        Route::delete('/delete', function () {
            return "DELETE";
        })->name('autors.destroy');

        // Modifica la editorial id
        Route::put('/{id}', [AutorController::class,'modifica'])->name('editors.update');

        // Crea una nova editorial. Està PER FER.
        Route::post('', function () {
            return "CREAR";
        })->name('editors.create');

    }
);
