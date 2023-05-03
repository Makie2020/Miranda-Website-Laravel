<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phoneNumber' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => "Please enter your full name",
            'phoneNumber.required' => "Please enter your phone number",
            'email.required' => "Please enter your email",
            'subject.required' => "Please enter your subject",
            'message.required' => "Please enter your message"
        ];
    }
}
