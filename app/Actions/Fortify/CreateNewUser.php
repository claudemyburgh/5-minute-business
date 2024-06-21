<?php

    namespace App\Actions\Fortify;

    use App\Models\User;
    use App\Rules\SouthAfricanID\ValidId;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Laravel\Fortify\Contracts\CreatesNewUsers;
    use Laravel\Jetstream\Jetstream;

    class CreateNewUser implements CreatesNewUsers
    {
        use PasswordValidationRules;

        /**
         * Validate and create a newly registered user.
         *
         * @param array<string, string> $input
         */
        public function create(array $input): User
        {
            Validator::make($input, [
                'south_african_id' => ['required', 'string', 'max:255', new ValidId],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            return User::create([
                'south_african_id' => $input['south_african_id'],
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
        }
    }
