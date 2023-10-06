<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EstimationMepRequest extends FormRequest
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
            'type' => 'required|string',
            'language' => 'required|string',
            'units' => 'required|string',
            'disciplines' => 'required|array',
            'services' => 'required|array',
            'lod' => 'required|string',
            'data' => 'required|array',
            'version' => 'required|string',
            'coordinationSoftware' => 'nullable|array',
            'fabrication_software' => 'nullable|string',
            'duration' => 'required|string',
            'draftsmen' => 'nullable|string',
            'modelers' => 'nullable|string',
            'coordinators' => 'nullable|string',
            'managers' => 'nullable|string',
            'deliverables' => 'required|array',
            'downtime' => 'required|string',
            'decisions' => 'required|string',
            'reports' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'required|array',
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
            'type.required' => 'Type of the building/construction is required!',
            'language.required' => 'Project language is required!',
            'units.required' => 'Project units is required!',
            'disciplines.required' => 'Discipline is required!',
            'services.required' => 'Services is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'data.required' => 'Incoming data is required!',
            'version.required' => 'Revit version is required!',
            'duration.required' => 'Expected project duration is required!',
            'deliverables.required' => 'Deliverables is required!',
            'downtime.required' => 'In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days is required!',
            'decisions.required' => 'Possibility of making independent technical decisions by the performer is required!',
            'files.required' => 'Files is required!',
        ];
    }
}
