<?php

    namespace App\Livewire\Company;

    use App\Livewire\Company\Steps\CompanyType;
    use App\Livewire\Company\Steps\ProposedNames;
    use App\Support\CompanyState;
    use Spatie\LivewireWizard\Components\WizardComponent;

    class RegisterCompany extends WizardComponent
    {

        public function stateClass(): string
        {
            return CompanyState::class;
        }


        public function initialState(): array
        {
//            $company = auth()->user()->companies()->last(function (int $value, int $key) {
//                return $value < 3;
//            });

            $company = auth()->user()->companies()->where('complete', false)->first();


            return [
                'company.steps.company-type' => [
                    'company' => $this->company ?? null,
                    'company_type' => $this->company?->company_type ?? ''
                ],
                'company.steps.proposed-names' => []
            ];
        }


        public function steps(): array
        {
            return [
                CompanyType::class,
                ProposedNames::class
            ];
        }
    }
