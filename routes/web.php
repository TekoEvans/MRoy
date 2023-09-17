<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CocktailController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ResevationMailController;


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


Route::get('/', [CocktailController::class,'index1']);

 

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
Route::get('/admin', function () {
    return view('layouts.masterAdmin');
})->middleware(['auth', 'verified']);


Route::get('/admin', [ReservationController::class,'indexadmin'])->middleware('auth', 'verified');
Route::get('/list-reservation', [ReservationController::class,'AllRervationsadmin'])->middleware('auth', 'verified');

Route::PUT('/ReservationAccept/{id}',  [ReservationController::class,'Accept'])->middleware('auth', 'verified');
Route::PUT('/ReservationRefus/{id}',  [ReservationController::class,'Refus'])->middleware('auth', 'verified');
Route::get('/bar',  [ResevationMailController::class,'bar']) ;
Route::PUT('/cocktailDelete/{id}',  [CocktailController::class,'delete'])->middleware('auth', 'verified');
Route::PUT('/reservationAnnuler/{id}',  [ReservationController::class,'Annuler'])->middleware('auth', 'verified');

Route::get('/details-reservation', function () {
       return view('appAdmin.order-detail');
     })->middleware(['auth', 'verified']);

Route::get('/adminAddCoktail', function () {
    return view('appAdmin.add-new-product');
})->middleware(['auth', 'verified']);


Route::get('/adminCocktails', [CocktailController::class,'admincocktail'])->middleware('auth', 'verified');


Route::get('/all-users', function () {
    return view('appAdmin.all-users');
})->middleware(['auth', 'verified']);




Route::get('/reservation',[ReservationController::class,'AllRervation'])->middleware(['auth', 'verified']);
Route::get('/reservation',[ReservationController::class,'AllRervation'])->middleware(['auth', 'verified']);
Route::get('/all-users',[UserController::class,'getAllUser']);
Route::get('/cocktail',[CocktailController::class,'index']);
Route::post('/reservationpost',[ReservationController::class,'store']);
Route::post('/addcocktailpost',[CocktailController::class,'storeCocktail']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', function () {
    return view('app.blog');
})->middleware(['auth', 'verified'])->name('blog');

Route::get('/contact', function () {
    return view('app.contact');
}) ->name('contact');

// Route::get('/reservation', function () {
//     return view('app.reservation');
// })->middleware(['auth', 'verified'])->name('reservation');

Route::get('/newReservation' , function () {
    return view('app.add-resevation');
})->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
