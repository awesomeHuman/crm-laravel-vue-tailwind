<?php

use App\Http\Controllers\Api\v1\CompanyController;
use App\Http\Controllers\Api\v1\CountryCityController;
use App\Http\Controllers\Api\v1\NoteController;
use App\Http\Controllers\Api\v1\NoteStorageController;
use App\Http\Controllers\Api\v1\PasswordChange;
use App\Http\Controllers\Api\v1\PersonController;
use App\Http\Controllers\Api\v1\ProfileUpdateController;
use App\Http\Controllers\Api\v1\StorageController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {


    // Country - City
    Route::get('/country',[CountryCityController::class,'country']);
    Route::get('/city',[CountryCityController::class,'city']);
    Route::get('/district/{id}',[CountryCityController::class,'district']);

    // Profile Routes
    Route::get('/logout',[UserController::class,'logout']);
    Route::put('/profile-update',ProfileUpdateController::class);
    Route::put('/password-reset',PasswordChange::class);

    // Menu Route Resource
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/company', CompanyController::class);
    Route::get('/company-list', [CompanyController::class,'create']);
    Route::put('/company-active/{id}', [CompanyController::class,'active']);

    Route::apiResource('/persons', PersonController::class);
    Route::get('/person-list', [PersonController::class,'create']);
    Route::put('/person-active/{id}', [PersonController::class,'active']);

    Route::apiResource('/notes', NoteController::class);
    Route::get('/note-list', [NoteController::class,'create']);
    Route::put('/note-active/{id}', [NoteController::class,'active']);

    Route::apiResource('/note-storage', NoteStorageController::class);

    Route::post('/upload-image' , StorageController::class)->name('upload.editor');

});
