<?php

use App\Controller\UserController;
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
})->name("accueil");

Route::get('hello', function (){
    $personne = [
        ["prenom" => "Toto", "nom" => "Tata"],
        ["prenom" => "JC", "nom" => "JP"],
        ["prenom" => "Julie", "nom" => "Titi"]
    ];
    return view('hello.index', ["personne" => $personne]);
                                    //"personne" => $personne extract($_POST)
});

Route::get('batiment/{batiment?}/etage/{num?}', function ($batiment, $num = "RDC"){

    return  view('batiment.index', ["bat" => $batiment, "etage" => $num]);

})->where('num', '[0-9]+');


//Route::get('user', [UserController::class, 'index']);
Route::resource('user', 'App\Http\Controllers\UserController');



Route::get('user/avecParam/{param}', 'App\Http\Controllers\UserController@avecParam');
//Route::match(['get','post'],'user/avecParam/{param}', 'App\Http\Controllers\UserController@avecParam');
