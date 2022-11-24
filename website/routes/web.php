<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Controllers\HomeController;
use App\Controllers\ItemController;
use App\Controllers\ViolinController;
use App\Controllers\UserController;
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
    return view('/');
});
Route::get('dashbordb','App\Http\Controllers\UserController@dashborda');
Route::get('musics','App\Http\Controllers\UserController@music');
Route::get('dashbords','App\Http\Controllers\UserController@dashbord');
Route::get('scans','App\Http\Controllers\UserController@scan');
Route::get('admin','App\Http\Controllers\UserController@boldgallery');

Route::apiResource('Posts','App\Http\Controllers\Api\PostController');


Route::resource('user','App\Http\Controllers\UserController');




Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function () {
    $article = new Article();
    $article->title = request('title');
    $article->body = request('body');
    $article->saves();
});

Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/store/{category?}/{item?}',function($category=null,$item=null){
  //$category = request('category');
  //if(isset($category)){
    //if(isset($item)){
     // return "you are viewing the store for{$category}for{$item}";
    //}
    //return 'you are viewing the store for ' .  strip_tags($category);
//}
  //return 'you are viewing the all instruments ';

//});

//Route::get('/store',function(){
  //$category = request('category');
  //if(isset($category)){
    //return 'you are viewing the store for ' .  strip_tags($category);
//}
  return 'you are viewing the all instruments ';

//});

Route::get('/art', function(){
    $age = request('age');
    return 'your age is ' . $age;

});

Route::resource('violin','App\Http\Controllers\ViolinController');

// Route::resource('student','App\Http\Controllers\StudentController@student');
Route::get('stds','App\Http\Controllers\StudentController@index');



// Route::resource('artcle','App\Http\Controllers\ItemController');
// Route::resource('std','App\Http\Controllers\ItemController@$student');