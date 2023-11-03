<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cast;

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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cast', 'App\Http\Controllers\CastController@store');

Route::get('/logout',  function () {
    \auth   ()->logout();
    return redirect('/home');
});


// Route::get('/', function () {
//     return view('index',[
//         "title" => "Home",
//         "Judul" => "Halaman Home"
//       ]);
// });

Route::get('/tables', function () {
    return view('tables',[
        "title" => "Tables",
        "Judul" => "Tabel"
      ]);
});


Route::get('/data-tables', function () {
    return view('data-tables',[
        "title" => "Data Tables",
        "Judul" => "Halaman Data Tabel"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "Dashboard",
        "Judul" => "Halaman Dashboard"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact",
        "Judul" => "Halaman Contact"
    ]);
});

Route::get('/cast', function () {
    $cast = DB::table('cast')->get();
    return view('cast',compact("cast")
    );
});

Route::get('/emp/create', function () {
    return view('emp.create',[
        "title" => "Contact",
        "Judul" => "Halaman Contact"
    ]);
});



Route::get('/emp/edit/{id}', 'App\Http\Controllers\CastController@edit');
Route::patch('/cast{id}', 'App\Http\Controllers\CastController@update');
Route::delete('/cast{id}', 'App\Http\Controllers\CastController@destroy');
Route::get('/cast{cast_id}', 'App\Http\Controllers\CastController@show');