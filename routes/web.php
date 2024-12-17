<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageGeneratorController;


Route::get('/generate', [PageGeneratorController::class, 'showForm'])->name('generate.form');
Route::post('/generate', [PageGeneratorController::class, 'generatePage'])->name('generate.page');

Route::get('/test', function() {
    return view('templates.page-test');
});
