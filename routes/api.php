<?php
// routes/api.php

use App\Http\Controllers\StudyGroupController;
use App\Http\Controllers\SessionController;
Route::prefix('study-groups')->group(function () {
    Route::post('/', [StudyGroupController::class, 'store']);
    Route::get('/', [StudyGroupController::class, 'index']);
    Route::get('/{id}', [StudyGroupController::class, 'show']);
    Route::post('/{id}/join', [StudyGroupController::class, 'join']);
    Route::post('/{id}/leave', [StudyGroupController::class, 'leave']);
    Route::post('/{id}/schedule-session', [SessionController::class, 'store']);
});
