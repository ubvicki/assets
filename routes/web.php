<?php

use App\Http\Controllers\applicantController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('landingpage');
// });

Route::get('/',[applicantController::class,'index'])->name('applicant.listing');
Route::get('/create',[applicantController::class,'create'])->name('applicant.create');
Route::post('/create',[applicantController::class,'store'])->name('applicant.store');
Route::get('/success',[applicantController::class,'success'])->name('applicant.success');

// Route::get('/success', function () {
//     return view('components.success');
// })->name('success');
