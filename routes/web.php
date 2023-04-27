<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SereviceController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ConvocationController;
use App\Http\Controllers\UpdateSereviceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PresentService;
use App\Http\Controllers\Update;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\PageDashboardController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\AdminController;


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


//////// page welcome:
Route::get('/',[DataController::class, 'getData']);
Route::post('/',[DataController::class, 'getProfession'])->name('profession');

//////////////////////////

Route::get('/presentService',[PresentService::class, 'getService'])->name('presentService');








Route::get('/pageDashboard',[PageDashboardController::class,"getDashboard"]
)->middleware(['auth', 'verified','valide_P_Dashboard'])->name('pageDashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//////service user:
Route::middleware('valide_P_Dashboard')->group(function () {
Route::get('serevice',[SereviceController::class ,'index'])->name('serevice');
Route::delete('serevice', [SereviceController::class, 'destroy'])->name('serevice.destroy');
Route::post('serevice',[SereviceController::class, 'store']);
Route::get('UpdateSerevice',[SereviceController::class ,'show'])->name('serevice.show');
Route::patch('service', [SereviceController::class, 'update'])->name('serevice.update');
});
//////create carte visite user:

Route::get('CarteVisite',[CarteController::class ,'index'])->name('CarteVisite');
Route::post('CarteVisite',[CarteController::class ,'store'])->name('CarteVisite.store');
Route::delete('CarteVisite',[CarteController::class ,'destroy'])->name('CarteVisite.destroy');
Route::patch('CarteVisite', [CarteController::class, 'update'])->name('CarteVisite.update');

////////////////////////////////////////////////////////////////:
Route::get('pageProfile',[ProfilePageController::class ,'index'])->name('pageProfile');

//////les routes Admin:

Route::middleware('valideAdmin')->group(function () {

Route::get('pageAdmin',[AdminController::class ,'index'])->name('pageAdmin');
Route::delete('pageAdmin',[AdminController::class ,'destroy'])->name('pageAdmin.destroy');
Route::post('pageAdmin',[AdminController::class ,'recherche'])->name('pageAdmin.recherche');


Route::get('convocation',[ConvocationController::class ,'index'])->name('convocation');
Route::delete('convocation', [ConvocationController::class, 'destroy'])->name('convocation.destroy');
Route::get('updateserevice',[ConvocationController::class ,'show'])->name('updateserevice.show');
Route::patch('convocation', [ConvocationController::class, 'update'])->name('convocation.update');
Route::get('acceptconvocation',[ConvocationController::class ,'edit'])->name('convocation.edit');
Route::delete('suppCarte', [ConvocationController::class, 'destroyCarte'])->name('convocation.destroyCarte');
Route::get('acceptCarte',[ConvocationController::class ,'editCarte'])->name('convocation.editCarte');
Route::get('profileAdmin',[ProfileAdminController::class ,'index'])->name('profileAdmin.index');

});


require __DIR__.'/auth.php';
