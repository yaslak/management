<?php

namespace App\Rules\Society\Profil;

use App\Model\Society\Society;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class NameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        return (DB::table('societies')->where('society_name',$value)->first()) ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
