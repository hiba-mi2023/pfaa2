<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', [NoteController::class, 'displayNotes'])->name('notes.display-note');
Route::get('/notes/create', [NoteController::class, 'addNote'])->name('notes.add');
Route::post('/notes', [NoteController::class, 'storeNote'])->name('notes.store');
Route::get('/notes/{id}', [NoteController::class, 'show'])->name('note.detail');
Route::get('/user-page', [UserController::class, 'userPage'])->name('user.page');
