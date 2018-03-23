<?php

namespace App\Http\Requests\Society\Profil;

use App\Rules\Society\Profil\DateRule;
use App\Rules\Society\Profil\EmailRule;
use App\Rules\Society\Profil\NameRule;
use App\Rules\Society\Profil\RangeRule;
use App\Rules\Users\TelRule;
use Illuminate\Foundation\Http\FormRequest;

class SocietyRequest extends FormRequest
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
            'name' => ['required','string','min:3','max:55',new NameRule()],
            'email' => ['required','email', new EmailRule()],
            'tel' => ['required','string','min:10','max:10',new TelRule()],
            'speaker' => ['required','string','min:3','max:20'],
            'address' => ['required','string','min:10','max:120'],
            'build' => ['required','string','max:10'],
            'city' => ['required','string','min:3','max:10'],
            'licence' => ['required','string'],
            'turnover' => ['required','string'],
            'limit' => ['required','date', new DateRule()],
            'domain' => ['required','string', 'min:3'],
            'range' => ['required','string', new RangeRule()],
            'logo' => 'mimes:jpeg,jpg,bmp,png'
        ];
    }
}
