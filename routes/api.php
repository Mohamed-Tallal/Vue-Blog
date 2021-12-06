<?php

use App\Model\Post;
use App\Http\Resources\Tax;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->group(function () {
    Route::resource('post', 'FrontEnd\PostController');

});

Route::get('contact-us' ,'FrontEnd\ContactUsController@contactUs');
Route::get('tag-data' ,'FrontEnd\TagController@index');
Route::get('category-data' ,'FrontEnd\CategoryController@index');
Route::get('post-data' ,'FrontEnd\PostController@index');
Route::get('find-post/{id}' ,'FrontEnd\PostController@show');
Route::post('create-post' ,'FrontEnd\ContactUsController@create');
