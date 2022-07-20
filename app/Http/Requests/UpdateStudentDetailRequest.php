<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentDetailRequest extends FormRequest
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
        $rules = [
            'fullname' => [
                'required',
                'string',
            ],
            'namewithinitial' => [
                'required',
            ],
            'address' => [
                'required',
            ],
            'dob' => [
                'required',
                'date',
            ],
            'gender' => [
                'required',
            ],
            'registereddate' => [
                'required',
                'date',
            ],
            'guarname' => [
                'required',
            ],
            'guaraddress' => [
                'required',
            ],
            'relation' => [
                'required',
            ],
            'guarcontact' => [
                'required',
            ],
            'studentnumber' => [
                'required',
            ],
        ];

        return $rules;
    }
}
