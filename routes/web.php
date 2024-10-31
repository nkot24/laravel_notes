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
Route::get('/notes/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/notes/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/notes/{id}', [NoteController::class, 'destroy'])->name('note.destroy');