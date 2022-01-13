<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', 'MainController@index');
Route::get('/infrastructure', 'MainController@getInfrastructure');
Route::get('/news', 'MainController@news');
Route::get('/news/{id}', 'MainController@getNews');
Route::get('/project/{id}', 'MainController@getProject');
Route::get('/vacancies', 'MainController@vacancies');

Route::post('/callback', 'MainController@callback');

Route::get('/setlocale/{locale}', function($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
 });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
