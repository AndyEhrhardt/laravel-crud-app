<?php

use App\Http\Controllers\Project2Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('projects', [
//         'projects' => Project::all()
//     ]);
// });

// Route::get('project/{project}', [ProjectController::class, 'show']);

// Route::get('/addproject', function () {
//     return view('addproject');
// });

// Route::post('/addproject', [ProjectController::class, 'addProject']);
// Route::get('/deleteproject/{project}', [ProjectController::class, 'delete']);
// Route::get('/editproject/{project}', [ProjectController::class, 'showEdit']);
// Route::post('/editproject/{id}', [ProjectController::class, 'edit']);

// Route::post('/addtask', [TaskController::class, 'addTask']);
// Route::get('/taskedit/{task}', [TaskController::class, 'showTaskEdit']);
// Route::post('/taskedit/{id}', [TaskController::class, 'taskEdit']);
// Route::get('/deletetask/{task}', [TaskController::class, 'delete']);


// // index page
// Route::get('/projects', [ProjectController::class, 'index']);

// // create page
// Route::get('projects/create', [ProjectController::class, 'create']);

// // store post
// Route::post('projects', [ProjectController::class, 'store']);

// // show page
// Route::get('projects/{project}', [ProjectController::class, 'show']);

// // edit page
// Route::get('projects/{project}/edit', [ProjectController::class, 'edit']);

// // update put
// Route::patch('projects/{project}', [ProjectController::class, 'update']);

// // destroy
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy']);


Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);