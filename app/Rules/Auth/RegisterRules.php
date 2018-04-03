<?php

namespace App\Rules\Auth;

use Illuminate\Contracts\Validation\Rule;

class RegisterRules implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(preg_match("/[a-z]/", $value) && preg_match("/[A-Z]/", $value) && preg_match("/[0-9]/", $value)){
            return true;
        }
        return false;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('auth.password');
    }
}
