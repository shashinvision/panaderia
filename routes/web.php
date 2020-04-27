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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Home@index')->name('inicio');

Route::get('/home','Home@index')->name('home');


// Route::get('about', function () {
//     return view('about');
// });

Route::view('/about', 'about')->name('about');

Route::view('/contacto', 'contacto')->name('contacto');
Route::get('/subir', 'ProductoController@create')->name('subir')->middleware('auth');
Route::post('/contacto', 'MessageController@store')->name('mensajeContacto');
Route::get('/productos', 'ProductoController@index')->name('mostrarproductos');
Route::post('/subirproducto', 'ProductoController@store')->name('subirproductos');

Route::get('/edit/{id}', 'ProductoController@edit')->name('edit')->middleware('auth');
Route::get('/delete/{id}', 'ProductoController@delete')->name('delete')->middleware('auth');

Route::post('/update/{id}', 'ProductoController@update')->name('update')->middleware('auth');
Route::get('/remove/{id}', 'ProductoController@remove')->name('remove')->middleware('auth');
Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false
]); // para desabilitar el registr

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {

    Auth::logout();

    return redirect()->route('inicio');
})->name('auth_logout'); 
