<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstimationRequest extends FormRequest
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
            'units' => 'required|string',
            'language' => 'required|string',
            'type' => 'required|string',
            'area' => 'required',
            'height' => 'required',
            'data' => 'required|array',
            'cloud' => 'required|array',
            'task' => 'required|array',
            'purpose' => 'required|array',
            'deliverables' => 'required|array',
            'version' => 'required|string',
            'lod' => 'required|string',
            'loi' => 'required|array',
            'accuracy' => 'required|string',
            'downtime' => 'required|string',
            'possibility' => 'required|string',
            'reports' => 'required|string',
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
            'units.required' => 'Units is required!',
            'language.required' => 'Language is required!',
            'type.required' => 'Type of the building\construction is required!',
            'area.required' => 'Building/construction area is required!',
            'height.required' => 'Height of a building/construction is required!',
            'data.required' => 'Incoming data is required!',
            'cloud.required' => 'Incoming Point Cloud is required!',
            'task.required' => 'Task for modeling is required!',
            'purpose.required' => 'The purpose of the model is required!',
            'deliverables.required' => 'Deliverables is required!',
            'version.required' => 'Revit version is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'loi.required' => 'LOI (Level of Information) is required!',
            'accuracy.required' => 'Project accuracy is required!',
            'downtime.required' => 'In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days is required!',
            'possibility.required' => 'Possibility of making independent technical decisions by the performer is required!',
            'reports.required' => 'Providing models and / or reports to control the work process is required!',
        ];
    }
}
