<?php

namespace App\Http\Requests\Users;

use App\Rules\Users\NewPasswordRule;
use App\Rules\Users\PasswordRule;
use App\Rules\Users\SexRule;
use App\Rules\Users\TelRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserProfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => ['nullable','alpha_num','min:5','max:15',Rule::unique('users')->ignore(Auth::user()->id)],
            'email'             => ['nullable','string','email','max:255',Rule::unique('users')->ignore(Auth::user()->id)],
            'password_current'  => ['nullable','min:6','string', new PasswordRule()],
            'password'          => ['nullable','string','min:6','confirmed'],
            'first_name'        => 'nullable|string|min:2|max:10',
            'last_name'         => 'nullable|string|min:2|max:20',
            'dtn'               => 'nullable|date',
            'sex'               => ['nullable','string','min:5','max:5', new SexRule()],
            'address'           => 'nullable|string|min:10|max:30',
            'house_nbr'         => 'nullable|string|min:1|max:6',
            'city'              => 'nullable|string|min:3|max:20',
            'tel'               => ['nullable','string','min:10','max:10',new TelRule()],
        ];
    }
}
