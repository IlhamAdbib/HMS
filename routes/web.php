<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Define the user.home route


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);
// Define the admin.home route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $homeController = new HomeController();
    return $homeController->redirect(); // Redirect based on user type
})->name('dashboard');

Route::get('/add_doctor_view',[AdminController::class,'addview']);
// Redirect users to login if they are not authenticated
/*Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
});*/

Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);