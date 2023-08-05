<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


class PasswordStrength implements Rule
{

    public function passes($attribute, $value)
    {
        // Minimum 8 characters
        if (strlen($value) < 8) {
            return false;
        }

        // At least one lowercase letter
        if (!preg_match('/[a-z]/', $value)) {
            return false;
        }

        // At least one capital letter
        if (!preg_match('/[A-Z]/', $value)) {
            return false;
        }

        // At least one special character
        if (!preg_match('/[^a-zA-Z0-9]/', $value)) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'The :attribute must be at least 8 characters long, contain at least one lowercase letter, one capital letter, and one special character.';
    }
}
