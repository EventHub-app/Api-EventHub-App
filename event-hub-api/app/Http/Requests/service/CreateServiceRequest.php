<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            "start_from" => [
                "string",
                "required"
            ],
            "events_completed" => [
                "string",
                "required"
            ],
            "expirience_years" => [
                "string",
                "required"
            ],
            "biography" => [
                "string",
                "required"
            ],
            "user_id" => [
                "string",
                "required"
            ],
            "image_path" => [
                "string",
                "required"
            ],

        ];
    }
}
