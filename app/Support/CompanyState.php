<?php

	namespace App\Support;

	use Spatie\LivewireWizard\Support\State;

    class CompanyState extends State
	{

            public function companyType(): array
            {
                $type = $this->forStep('company.steps.company-type');

                return [
                    'company_type' => $type['company_type']
                ];
            }

	}
