<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'coordination_software' => 'nullable|array',
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
        ];
    }

//    /**
//     * Custom message for validation
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return [
//            'email.required' => 'Email is required!',
//            'disciplines.required' => 'Discipline is required!',
//            'units.required' => 'Units is required!',
//            'type.required' => 'Type of the building/construction is required!',
//            'area.required' => 'Building/construction area is required!',
//            'height.required' => 'Height of a building/construction is required!',
//            'data.required' => 'Incoming data is required!',
//            'cloud.required' => 'Incoming Point Cloud is required!',
//            'task.required' => 'Task for modeling is required!',
//            'deliverables.required' => 'Deliverables is required!',
//            'version.required' => 'Revit version is required!',
//            'lod.required' => 'LOD (Level of Detail) is required!',
//            'loi.required' => 'LOI (Level of Information) is required!',
//            'accuracy.required' => 'Project accuracy is required!',
//        ];
//    }
}
