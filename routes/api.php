<?php
use App\Categories;
use Illuminate\Http\Request;

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

Route::group(['middleware' => ['web','auth:api']], function() {
    Route::get('/categories', 'Categories@index');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});


//Route::get('/categories','Categories@index');

//Route::middleware('auth:api')->resource('/categories','Categories@index');
/*Route::get('/categories', function(Request $request){
    
    $categories['data']=Categories::all();
    return json_encode($categories);
});*/

/*Route::middleware('auth:api')->get('/categories', function (Request $request) {
    $categories['data']=Categories::all();
    return json_encode($categories);
});*/

//Route::get('/categories', 'ServiceController@create')->name('serviceCreate')->middleware('auth');

