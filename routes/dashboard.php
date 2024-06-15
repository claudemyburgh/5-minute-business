<?php

    use App\Http\Controllers\Dashboard\DashboardIndexController;
    use App\Http\Controllers\Dashboard\Register\CompanyCreateController;
    use App\Http\Controllers\Dashboard\Register\BusinessIndexController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
], 'as' => 'dashboard.'], function () {
    Route::get('/dashboard', DashboardIndexController::class)->name('index');
    Route::get('/dashboard/register-company', CompanyCreateController::class)->name('register-company.index');
});


