<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            "name"=> 'required',
            "type"=> 'required',
            "description"=> 'required',
            "datetime"=> 'required',
            "area"=> 'required',
            "user_id" => 'required|integer',
            "location_id" => 'required|integer',
        ];
    }
}
