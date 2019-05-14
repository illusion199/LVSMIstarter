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



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', 'userManagement@index');
Route::resource('/user', 'userManagement');
//Route::get('/user/{id}', 'userManagement@index');
Route::get('/user-import', 'userManagement@create');
Route::get('/getuserinfo', 'userManagement@getuserinfoFunc');
Route::get('/getuserDetail/{id}', 'userManagement@getuserDetailFunc');
//Route::get('/user-import', 'userManagement@userImportFunc');
//Route::post('/user-bulk-import', 'userManagement@userBuklImportFunc')->name('bulk-import');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::view('profile', 'profile')->name('profile');
Route::get('profile', 'AvatarController@index')->name('profile');
Route::resource('avatar', 'AvatarController');



// Route::get('/user/{vue_capture?}', function () {
//     return view('usermanage.index');
//    })->where('vue_capture', '[\/\w\.-]*');

//    Route::get('/user/{vue_capture?}', function () {
//     return view('usermanage.index');
//    })->where('vue_capture', '[\/\w\.-]*');

//Route::get('/user/{any}', 'userManagement@index')->where('any', '.*');
// Route::get('/{vue?}', function () {
//     return view('index');
// })->where('vue', '[\/\w\.-]*');