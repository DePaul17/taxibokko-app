<?php

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

Route::get('/welcome', [App\Http\Controllers\ClientController::class, 'form_welcome']);
Route::get('/login', [App\Http\Controllers\ClientController::class, 'form_login']);
Route::get('/register', [App\Http\Controllers\ClientController::class, 'form_register']);
Route::get('/taxibokko', [App\Http\Controllers\ClientController::class, 'form_taxibokko']);
Route::get('/registerDriver', [App\Http\Controllers\ChauffeurController::class, 'form_registerDriver']);
Route::get('/loginDriver', [App\Http\Controllers\ChauffeurController::class, 'form_loginDriver']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'form_admin']);
Route::get('/management', [App\Http\Controllers\AdminController::class, 'form_management']);
Route::get('/gestionClient', [App\Http\Controllers\ClientController::class, 'form_gestionClient']);
Route::get('/gestionChauffeur', [App\Http\Controllers\ChauffeurController::class, 'form_gestionChauffeur']);
Route::get('/update_user/{id}', [App\Http\Controllers\ClientController::class, 'form_update_user'])-> name('update_user');
Route::get('/accueil', [App\Http\Controllers\ClientController::class, 'form_accueil']);
Route::get('/gestionTrajet', [App\Http\Controllers\DestinationController::class, 'form_gestionTrajet']);

Route::post('/register/traitement', [App\Http\Controllers\ClientController::class, 'traitement_register']);
Route::post('/login/traitement', [App\Http\Controllers\ClientController::class, 'traitement_login']);
Route::post('/registerDriver/traitement', [App\Http\Controllers\ChauffeurController::class, 'traitement_registerDriver']);
Route::post('/loginDriver/traitement', [App\Http\Controllers\ChauffeurController::class, 'traitement_loginDriver']);
Route::post('/admin/traitement', [App\Http\Controllers\AdminController::class, 'traitement_admin']);
Route::delete('/delete_user/{id}', 'App\Http\Controllers\ClientController@destroy')->name('delete_user');
Route::delete('/delete_driver/{id}', 'App\Http\Controllers\ChauffeurController@destroy')->name('delete_driver');
Route::put('/edit_user/{id}', [App\Http\Controllers\ClientController::class, 'editUser'])->name('user.update');
Route::post('/logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
Route::post('/trajet/traitement', [App\Http\Controllers\DestinationController::class, 'traitement_trajet']);
Route::delete('/delete_destination/{id}', 'App\Http\Controllers\DestinationController@destroy')->name('delete_destination');
Route::post('/new_trajet/traitement', [App\Http\Controllers\TrajetController::class, 'traitement_new_trajet']);



?>