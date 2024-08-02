<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'ApplierID'=>'integer',
            'Title'=>['String','min:5','max:20'],
            'Requirement'=>['String','min:10','max:30'],
            'Description'=>['String','min:10','max:80'],
            'Salary'=>['double']

        ];
    }
}
