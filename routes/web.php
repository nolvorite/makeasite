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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::resource('roles', App\Http\Controllers\RolesController::class);
    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::resource('user_actions', App\Http\Controllers\UserActionsController::class);
    Route::resource('projects', App\Http\Controllers\ProjectsController::class);
    Route::resource('work_types', App\Http\Controllers\WorkTypesController::class);

    Route::resource('time_entries', App\Http\Controllers\TimeEntriesController::class);
    Route::resource('manage_users', App\Http\Controllers\ManageUsersController::class);
    Route::resource('reports', App\Http\Controllers\ReportsController::class);

    Route::post('roles_mass_destroy', [App\Http\Controllers\RolesController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::post('users_mass_destroy', [App\Http\Controllers\UserController::class, 'massDestroy'])->name('users.mass_destroy');
    Route::post('projects_mass_destroy', [App\Http\Controllers\ProjectsController::class, 'massDestroy'])->name('projects.mass_destroy');
    Route::post('work_types_mass_destroy', [App\Http\Controllers\WorkTypesController::class, 'massDestroy'])->name('work_types.mass_destroy');
    Route::post('time_entries_mass_destroy', [App\Http\Controllers\TimeEntriesController::class, 'massDestroy'])->name('time_entries.mass_destroy');

});
