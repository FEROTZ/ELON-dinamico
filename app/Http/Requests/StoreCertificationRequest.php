<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCertificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reference'       => ['required', 'string'],
            'selectSource'    => ['string'],
            'studyHistory'    => ['string'],
            'maternalSurname' => ['required', 'string'],
            'paternalSurname' => ['required', 'string'],
            'name'            => ['required', 'string'],
            'birthDate'       => ['required', 'date'],
            'selectCertification' => ['required', 'string'],
            'selectAttempt'   => [
                                    'required',
                                    'string',
                                    Rule::in(['Sí', 'No']),
                                ],
            'attemptNumber'   => ['numeric', 'min:1'],
        ];
    }
}
