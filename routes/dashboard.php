<?php

    use App\Http\Controllers\Dashboard\DashboardIndexController;
    use App\Http\Controllers\Dashboard\Register\BusinessCreateController;
    use App\Http\Controllers\Dashboard\Register\BusinessIndexController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
], 'as' => 'dashboard.'], function () {
    Route::get('/dashboard', DashboardIndexController::class)->name('index');
    Route::get('/dashboard/register-business', BusinessCreateController::class)->name('register-business.index');
});


