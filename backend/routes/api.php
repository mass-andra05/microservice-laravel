<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NoteController;

Route::get('/note', [NoteController::class, 'index']);
Route::post('/note', [NoteController::class, 'store']);
Route::get('/note/{id}', [NoteController::class, 'show']);
Route::delete('/note/{id}', [NoteController::class, 'destroy']);
Route::put('/note/{id}', [NoteController::class, 'update']);

