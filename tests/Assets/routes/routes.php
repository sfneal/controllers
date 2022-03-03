<?php

use Illuminate\Support\Facades\Route;
use Sfneal\Controllers\Tests\Assets\Controllers\MockController;

Route::get('test', MockController::class)->name('test');
