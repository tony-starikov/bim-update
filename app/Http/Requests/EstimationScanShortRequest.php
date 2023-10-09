<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EstimationScanShortRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'disciplines' => 'required|array',
            'type' => 'required|string',
            'area' => 'required',
            'height' => 'required',
            'task' => 'required|array',
            'lod' => 'required|array',
            'accuracy' => 'required|string',
            'currency' => 'required|string',
            'start' => 'nullable|string',
            'address' => 'nullable|string',
            'link' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'nullable',
            'cf-turnstile-response' => ['required', Rule::turnstile()],
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
            'type.required' => 'Type of the building/construction is required!',
            'area.required' => 'Building/construction area is required!',
            'height.required' => 'Height of a building/construction is required!',
            'task.required' => 'Task for modeling is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'accuracy.required' => 'Project accuracy is required!',
            'currency.required' => 'Project currency is required!',
        ];
    }
}
