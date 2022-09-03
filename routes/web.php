<?php

use Illuminate\Support\Facades\Route;

use App\Models\student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    return view('auth.login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/create',function(){
    return view('create');
});

Route::post('/create',function(){
    $student = new User();
    $student->name = request('name');
    $student->email = request('email');
    $student->password = request(Hash::nake('password'));
    $student->save();
    return redirect('/registerStudent');
});
Route::get('/registerStudent',function(){
    return view('registerStudent');
});

Route::post('/registerStudent',function(){
    $student = new student();
    $student->level = request('level');
    $student->gpa = request('gpa');
    $student->contact = request('contact');
    $student->save();
    return redirect('/create');
});


require __DIR__.'/auth.php';
