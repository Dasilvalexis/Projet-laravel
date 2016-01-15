<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    "uses" => "MainController@home",
    "as" => "home"
]);



Route::get('/cgv',['as' => 'cgv', function () {
    return view('cgv');
}]);

Route::get('/test', [
    'uses' => 'MainController@essai'
]);


Route::get('/test-tableau', [
    'uses' => 'MainController@tableau',
    'as'   => 'test_tab',
]);

Route::get('/notre-equipe', [
    'uses' => 'MainController@equipe',
    'as'   => 'test_team',
]);

Route::group(['middleware' => ['web']], function () {


    Route::get('/', [
        'uses' => 'MainController@home',
        'as' => 'home'
    ]);


    /* GET ET POST */
    Route::any('/contactez-nous', [
        'uses' => 'MainController@contact',
        'as' => 'contact'
    ]);

});





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
