<?php
// use app\Http\Controllers\ClientsController;
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


Route::view('a-propos', 'clients/Apropos');
Route::view('contact', 'clients/contact');

// Clients
// Route::view('clients', 'clients/index');
Route::get('clients', 'App\Http\Controllers\ClientsController@index');
Route::get('clients/create', 'App\Http\Controllers\ClientsController@create');
Route::post('clients', 'App\Http\Controllers\ClientsController@store');
Route::get('clients/{client}', 'App\Http\Controllers\ClientsController@show');
Route::get('clients/{client}/edit', 'App\Http\Controllers\ClientsController@edit');
Route::patch('clients/{client}', 'App\Http\Controllers\ClientsController@update');
Route::delete('clients/{client}', 'App\Http\Controllers\ClientsController@destroy');


// Entreprise
Route::get('entreprises', 'App\Http\Controllers\EntreprisesController@list');
Route::post('entreprises', 'App\Http\Controllers\EntreprisesController@create');












// Route::get('/clients', function () {
//     $clients = [
//         'Jean',
//         'Marine',
//         'Barbara'
//     ];
//     return view('clients/index', compact('clients'));
// });
