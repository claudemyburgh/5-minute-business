<?php

    use App\Http\Controllers\Frontend\HomeIndexController;
    use Illuminate\Support\Facades\Route;

Route::get('/', HomeIndexController::class)->name('home');

include_once __DIR__ . '/dashboard.php';
