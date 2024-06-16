<?php

namespace App\Livewire\Company\Steps;

use Illuminate\View\View;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;


class ProposedNames extends StepComponent
{

    public string $name = '';

    public function submit()
    {

        dd($this->state());
    }

    public function render(): View
    {
        return view('livewire.company.steps.proposed-names');
    }
}
