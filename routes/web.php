<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationMailController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/nos-edition', function(){
    return view('noEdition');
})->name('NosEdition');

Route::post('/send-mail',[FormationMailController::class, 'sendMail'])->name('SendFormationMail');
