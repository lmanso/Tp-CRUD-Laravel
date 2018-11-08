<?php

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

//get sert à récupérer un élement à l'aide d'une requête HTTP
//dans mon URI si j'ai un / ou /home j'execute la fonction home du controler view
Route::get('/', 'View@home');
Route::get('/home', 'View@home');
Route::get('/series', 'View@series');
Route::get('/addSeries', 'View@addSeries');
Route::post('/update', 'View@updateForm');

//le route permet d'enregistrer des itinéraires
//je vais dans mon controller et avec le @ j'appelle la fonction
//le nom après le / correspond à l'action effectué 
//(nom donnée dans le formulaire avec action="")
Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteShow');
Route::post('/updateinsertaction', 'Serie@update');