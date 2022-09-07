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
    $student->password = Hash::make('12345678');
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


Route::middleware('auth','admin')->group(function () {

    Route::get('/studentstable', function () {
        $student = DB::table('users')
        ->join('students', 'users.id', '=', 'students.id')
        ->select('users.id','users.name','users.email', 'students.*')
        ->get();
        return view('studentstable', ['student' => $student]);
    })->name('studentsTable');
});

Route::get('/information', function () {
    $student = DB::table('users')
    ->join('students', 'users.id', '=', 'students.id')
    ->select('users.id','users.name','users.email', 'students.*')
    ->get();
    return view('information', ['student' => $student]);
})->name('information');

require __DIR__.'/auth.php';
