<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'index'])->name('note.index');
Route::get('/notes/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/notes', [NoteController::class, 'store'])->name('note.store');
Route::get('/notes/{id}', [NoteController::class, 'show'])->name('note.show');