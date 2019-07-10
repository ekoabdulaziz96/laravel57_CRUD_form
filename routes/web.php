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
Route::get('/cek', function () {
    return 'sukses';
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// use App\User;
// // dump('cek');
// Route::get('/users', function () {
//     $user = User::all();

//     dump($user->toArray());

//     return view('welcome');
// });

// Route::post('/store', function () {
//     dump(request()->all());
// });

Route::resource('/user', 'UserController');
Route::get('/table/user', 'UserController@dataTable')->name('table.user'); 