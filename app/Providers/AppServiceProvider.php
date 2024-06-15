<?php

namespace App\Providers;

use App\Components\BusinessWizardComponent;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Livewire::component('step-wizard', BusinessWizardComponent::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
