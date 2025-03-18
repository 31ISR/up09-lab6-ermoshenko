<?php

use App\Http\Controllers\GoodbyeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;

/*Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/goodbye', [GoodbyeController::class, 'goodbye'])->name('goodbye');
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
Route::get(uri: '/todo', action: [TodoController::class, 'index'])->name('todo.index');
Route::get(uri: '/todo/create', action: [TodoController::class, 'create'])->name('todo.create');
Route::post(uri: '/todo', action: [TodoController::class, 'store'])->name('todo.store');
Route::get(uri: '/todo/{id}', action: [TodoController::class, 'show'])->name('todo.show');
Route::get(uri: '/todo/{id}/edit', action: [TodoController::class, 'edit'])->name('todo.edit');
Route::put(uri: '/todo{id}', action: [TodoController::class, 'update'])->name('todo.update');
Route::delete(uri: '/todo/{id}', action: [TodoController::class, 'destroy'])->name('todo.destroy');*/
Route::resource('note', NoteController::class);
Route::resource('todo', TodoController::class);
