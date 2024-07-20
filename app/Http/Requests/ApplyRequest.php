<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Student;
class ApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Set to true to allow all users to use this request
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'programs' => 'required|exists:programs,id',
        ];
    }

    // public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         $email = $this->input('email');
    //         $programId = $this->input('programs');

    //         $student = Student::where('email', $email)->first();

    //         if ($student && $student->programs()->where('program_id', $programId)->exists()) {
    //             $validator->errors()->add('programs', 'You are already enrolled in this program.');
    //         }
    //     });
    // }


}
