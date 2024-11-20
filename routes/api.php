<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Import the TaskController class
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::get('/tasks/{id}', [TaskController::class, 'update']);


Route::post('profile',[ProfileController::class,'store']);
Route::get('profile/{id}',[ProfileController::class,'show']);
Route::get('user/{id}/profile',[UserController::class,'getprofile'],);
//get all the tasks ,which are belgongs to a scpecifc user
Route::get('user/{id}/tasks',[UserController::class,'getUserTasks'],);

//get the user for a specific taskk
Route::get('task/{id}/user',[TaskController::class,'getTaskUser'],);

//many to many
Route::post('tasks/{tasksId}/categories',[TaskController::class,'addCategoriesToTask']);
Route::get('tasks/{tasksId}/categories',[TaskController::class,'getTaskCategories']);
