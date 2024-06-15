<?php

	namespace App\Http\Controllers\Dashboard\Register;

	use App\Livewire\Register\Business\Step\BusinessType;
    use Spatie\LivewireWizard\Components\WizardComponent;

    class StepWizard extends WizardComponent
	{

        public function steps(): array
        {
            return [
                BusinessType::class
            ];
        }
    }
