<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CartsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/practice/test', function () {
    return view('practice/test');
});

// Route::get('/card', function () {
//     return view('card');
// })->name('card');
// Route::get('/index', function () {
//     return view('index');
// })->name('index');
// Route::get('/update', function () {
//     return view('update');
// })->name('uptade');
// Route::get('/removecatitem', function () {
//     return view('removecartitem');
// })->name('remove');
// Route::get('/emptycard', function () {
//     return view('emptycard');
// })->name('empty');

Route::get('/index', [CartsController::class, 'index'])->name('index');
Route::get('/card', [CartsController::class, 'addToCart'])->name('card');
Route::get('/card', [CartsController::class, 'showCard'])->name('card');
    Route::get('/update',[CartsController::class,'update'])->name('carts.update');
    Route::get('/destroy/{id}',[CartsController::class,'destroy'])->name('carts.remove');
    Route::get('/detail/{id}',[CartsController::class,'detail'])->name('carts.dempty');


Route::prefix('student')->group(function(){
    Route::get('/',[StudentsController::class,'index'])->name('students.index');
    Route::get('/create',[StudentsController::class,'create'])->name('students.create');
    Route::get('/store',[StudentsController::class,'store'])->name('students.store');
});
Route::get('/edit/{id}',[StudentsController::class,'edit'])->name('students.edit');
    Route::get('/updatestudent',[StudentsController::class,'update'])->name('update');
    Route::get('/deletestudent/{id}',[StudentsController::class,'deletestudent'])->name('deletestudent');
    Route::get('/detail/{id}',[StudentsController::class,'detail'])->name('students.detail');

// Route::prefix('contacts')->group(function(){
//     Route::get('/',[ContactsController::class,'index'])->name('contacts.index');
//     Route::get('/create',[ContactsController::class,'create'])->name('contacts.create');
//     Route::get('/store',[ContactsController::class,'store'])->name('contacts.store');

// });
// Route::get('/edit/{id}',[ContactsController::class,'edit'])->name('contacts.edit');
//     Route::get('/updatecontact',[ContactsController::class,'update'])->name('update');
//     Route::get('/deletecontact/{id}',[ContactsController::class,'deletecontact'])->name('deletecontact');
