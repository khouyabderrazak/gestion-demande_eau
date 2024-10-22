<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middlewar' => ['auth:api']],function(){
//     Route::apiResource('Home','HomeController');
// });
// Route::middleware('auth:sanctum')->apiResource('Home','HomeController');


// Route::get('/Home', [
//     'middleware' => 'App\Http\Middleware\DumpMiddleware',
//      function () {
//         return view('welcome');
// }]);
Route::post('store','HomeController@store');
Route::post('store1','demandes@store1');
Route::post('destroy','HomeController@destroy');
Route::get('index','HomeController@index');
// Route::post('User','UserController@register');
// Route::post('store','UserController@login');





Route::get('new' , 'api_demande@new') ;
Route::get('un_demande/{id}','api_demande@un_demande') ;
Route::get('displayimage/{id}','api_demande@displayimage') ;
Route::get('completed' , 'api_demande@completed') ;
Route::get('non_completed' , 'api_demande@non_completd') ;
Route::get('valide' , 'api_demande@valide') ;
Route::get('non_valide' , 'api_demande@non_valide') ;
Route::get('/make_valide/{id}','api_demande@make_valide') ;
Route::get('/make_non_valide/{cc}','api_demande@make_non_valide');
Route::get('/dest/{id}','api_demande@dest');




//API IMGE
Route::get('/displaycin/{id}' , 'api_demande@display_cin_image') ;
Route::get('/displaydemande/{id}' , 'api_demande@display_demande_image') ;
Route::get('/displayplan/{id}' , 'api_demande@display_plan_image') ;
Route::get('/displayimmoblilier/{id}' , 'api_demande@display_immobilier_image') ;

Route::post('/message/{id}' , 'api_demande@addMessage');
