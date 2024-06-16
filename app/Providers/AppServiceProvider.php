<?php

namespace App\Providers;



use App\Livewire\Company\RegisterCompany;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Livewire::component('company-wizard', RegisterCompany::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
