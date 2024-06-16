<?php

namespace App\Livewire\Company\Steps;

use App\Enums\CompanyTypeEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\View\View;

use Livewire\Attributes\Validate;
use Spatie\LivewireWizard\Components\StepComponent;

class CompanyType extends StepComponent
{

    public string $company_type = '';



    public function submit(): void
    {
        $validated = $this->validate([
            'company_type' => ['required', new Enum(CompanyTypeEnum::class)]
        ]);


        empty($this->state()->currentStep()['company_type']) ?
            auth()->user()->companies()->first()->update($validated) :
            auth()->user()->companies()->create($validated);

        $this->nextStep();
    }


    public function render(): View
    {
        return view('livewire.company.steps.company-type');
    }
}
