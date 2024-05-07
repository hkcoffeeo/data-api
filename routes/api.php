<?php

use App\Http\Controllers\Api\SingaporeSavingsBondController;
use Illuminate\Support\Facades\Route;

Route::get('/singapore-savings-bond', [SingaporeSavingsBondController::class, 'index'])->name('ssb.index');
