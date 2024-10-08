<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EstimationMepShortRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'disciplines' => 'required|array',
            'services' => 'required|array',
            'lod' => 'required|string',
            'data' => 'required|array',
            'duration' => 'required|string',
            'deliverables' => 'required|array',
            'comment' => 'nullable|string',
            'files' => 'required|array',
//            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'disciplines.required' => 'Discipline is required!',
            'services.required' => 'Services is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'data.required' => 'Incoming data is required!',
            'duration.required' => 'Expected project duration is required!',
            'deliverables.required' => 'Deliverables is required!',
            'files.required' => 'Files is required!',
        ];
    }
}
