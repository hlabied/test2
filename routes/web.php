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

// Route::get('/', function () {
//     return view('show');
// });
Route::get('/', 'ControllerPersonne@show');
Route::get('/personnes', 'ControllerPersonne@show');

Route::get('/personnes/add', 'ControllerPersonne@create');

Route::post('/personnes/add/store', 'ControllerPersonne@store');


Route::post('/language', 'LanguageController@chooser');

// Route::post('/language', array(
// 'before'	=>	'csrf',
// 'as' => 'language-choose',
// 'uses' => 'LanguageController@chooser'
//
// ));


//
// Route::get('/lang/{lang}', function ($lang =null)
// {
// App::setLocale($lang);
// return view('create');
// });

// Route::group(['middleware' => ['meswitch']], function() {
//   // uses 'auth' middleware plus all middleware from $middlewareGroups['web']
// Route::post('/language', 'LanguageController@chooser');
// });

// Route::group(['middleware' => ['me']], function () {
//     Route::post('/language', 'LanguageController@chooser');
// });
