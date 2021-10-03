<?php

use App\Http\Controllers\API\TaskController;
use App\Models\Info\TaskAttr;
use Illuminate\Support\Facades\Route;

Route::prefix('task')->name('task.')->group(function () {

    Route::get('', [TaskController::class, 'filterTasks'])
        ->name('filter');

    Route::post('', [TaskController::class, 'createTask'])
        ->name('create');

    Route::get('{task}', [TaskController::class, 'showTask'])
        ->name('show');

    Route::patch('{task}', [TaskController::class, 'editTask'])
        ->name('edit');

    Route::delete('{task}', [TaskController::class, 'destroyTask'])
        ->name('destroy');

});
