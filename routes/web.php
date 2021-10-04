<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/sobre-nosotros', [SiteController::class, 'sobreNosotros']);
Route::get('/covid-19', [SiteController::class, 'covid19']);
Route::get('/medicamentos', [SiteController::class, 'medicamentos']);
Route::get('/hospitales', [SiteController::class, 'hospitales']);
Route::get('/vacunas', [SiteController::class, 'vacunas']);
Route::get('/volantes', [SiteController::class, 'volantes']);
Route::get('/registro', [SiteController::class, 'registro']);
Route::get('/hisopado', [SiteController::class, 'hisopado']);
Route::get('/sintomas', [SiteController::class, 'sintomas']);
Route::get('/medidas', [SiteController::class, 'medidas']);
Route::get('/familiares', [SiteController::class, 'familiares']);
Route::post('/usuarios', [SiteController::class, 'usuarios']);
