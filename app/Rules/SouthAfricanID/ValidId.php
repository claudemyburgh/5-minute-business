<?php

    namespace App\Rules\SouthAfricanID;

    use Closure;
    use Designbycode\SouthAfricanIdValidator\SouthAfricanIdValidator;
    use Illuminate\Contracts\Validation\ValidationRule;
    use Illuminate\Translation\PotentiallyTranslatedString;

    class ValidId implements ValidationRule
    {
        /**
         * Run the validation rule.
         *
         * @param Closure(string): PotentiallyTranslatedString $fail
         */
        public function validate(string $attribute, mixed $value, Closure $fail): void
        {
            if (!(new SouthAfricanIdValidator())->isValid($value)) {
                $fail('Is not a valid South African ID');
            }

        }
    }
