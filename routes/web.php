<?php
use Illuminate\Support\Facades\Http;
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

Route::get('/api', function () {
    $apiController = new APIController();
    $data = $apiController->getDataFromAPI('https://api.publicapis.org/entries');

    return $data;
});
Route::get('/','EntityController@views');
Route::get('/entities', 'EntityController@index');


