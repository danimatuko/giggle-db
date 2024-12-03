<?php

use App\Http\Controllers\JokeController;
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

/**
 * Home Route
 *
 * This route handles the homepage view of the application.
 */
Route::view('/', 'home');

/**
 * Jokes Routes
 *
 * These routes handle the CRUD operations for jokes, including:
 * - Viewing all jokes
 * - Creating, storing, and editing jokes
 * - Showing specific jokes
 * - Deleting jokes
 */

// Display all jokes
Route::get('/jokes', [JokeController::class, 'index']);

/**
 * Show form to create a new joke
 */
Route::get('/jokes/create', [JokeController::class, 'create']);

/**
 * Store a newly created joke
 *
 * This route handles the storage of a new joke after validation.
 */
Route::post('/jokes', [JokeController::class, 'store']);

/**
 * Show a specific joke
 *
 * This route shows the details of a specific joke based on its ID.
 */
Route::get('/jokes/{id}', [JokeController::class, 'show']);

/**
 * Show form to edit a specific joke
 *
 * This route presents the form to edit an existing joke.
 */
Route::get('/jokes/{joke}/edit', [JokeController::class, 'edit']);

/**
 * Update a specific joke
 *
 * This route handles the update of a specific joke based on the submitted form data.
 */
Route::put('/jokes/{joke}', [JokeController::class, 'update']);

/**
 * Delete a specific joke
 *
 * This route handles the deletion of a specific joke from the database.
 */
Route::delete('/jokes/{joke}/destroy', [JokeController::class, 'destroy']);
