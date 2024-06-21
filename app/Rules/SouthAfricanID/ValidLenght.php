<?php

namespace App\Rules\SouthAfricanID;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidLenght implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
}
