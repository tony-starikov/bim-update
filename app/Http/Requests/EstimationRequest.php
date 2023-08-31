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
            'disciplines' => 'required|string',
            'units' => 'required|string',
            'language' => 'required|string',
            'type' => 'required|string',
            'area' => 'required|string',
            'height' => 'required|string',
            'data' => 'required|string',
            'incoming_point_cloud' => 'required|string',
            'task_for_modeling' => 'required|string',
            'revit_version' => 'required|string',
            'lod' => 'required|string',
            'loi' => 'required|string',
            'project_accuracy' => 'required|string',
            'deliverables' => 'required|string',
            'comment' => 'string',
            'reference' => 'string',
            'cloud_link' => 'string',
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
            'incoming_point_cloud.required' => 'Incoming Point Cloud is required!',
            'task_for_modeling.required' => 'Task for modeling is required!',
            'revit_version.required' => 'Revit version is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'loi.required' => 'LOI (Level of Information) is required!',
            'project_accuracy.required' => 'Project accuracy is required!',
            'deliverables.required' => 'Deliverables is required!',
        ];
    }
}
