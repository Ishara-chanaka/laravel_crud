<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentDetailRequest extends FormRequest
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
                'before:today',
            ],
            'gender' => [
                'required',
            ],
            'registereddate' => [
                'required',
                'date',
                'before:today',
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
                'unique:student_details,student_id',
            ],
        ];

        return $rules;
    }
}
