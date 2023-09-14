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
//        return [
//            'email' => 'required|email|max:255',
//            'disciplines' => 'required|string',
//            'units' => 'required|string',
//            'language' => 'required|string',
//            'type' => 'required|string',
//            'area' => 'required|string',
//            'height' => 'required|string',
//            'data' => 'required|string',
//            'incoming_point_cloud' => 'required|string',
//            'task_for_modeling' => 'required|string',
//            'revit_version' => 'required|string',
//            'lod' => 'required|string',
//            'loi' => 'required|string',
//            'project_accuracy' => 'required|string',
//            'deliverables' => 'required|string',
//            'comment' => 'nullable|string',
//            'reference' => 'nullable|string',
//            'cloud_link' => 'nullable|string',
//        ];

        return [
            'email' => 'required|email|max:255',
            'disciplines' => 'required|array',
            'units' => 'required|string',
            'type' => 'required|string',
            'area' => 'required',
            'height' => 'required',
            'data' => 'required|array',
            'cloud' => 'required|array',
            'task' => 'required|array',
            'deliverables' => 'required|array',
            'version' => 'required|string',
            'lod' => 'required|string',
            'loi' => 'required|array',
            'accuracy' => 'required|string',
            'start' => 'nullable|string',
            'address' => 'nullable|string',
            'link' => 'nullable|string',
            'comment' => 'nullable|string',
            'files' => 'nullable',
            'reference' => 'nullable|string',
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
            'type.required' => 'Type of the building/construction is required!',
            'area.required' => 'Building/construction area is required!',
            'height.required' => 'Height of a building/construction is required!',
            'data.required' => 'Incoming data is required!',
            'cloud.required' => 'Incoming Point Cloud is required!',
            'task.required' => 'Task for modeling is required!',
            'deliverables.required' => 'Deliverables is required!',
            'version.required' => 'Revit version is required!',
            'lod.required' => 'LOD (Level of Detail) is required!',
            'loi.required' => 'LOI (Level of Information) is required!',
            'accuracy.required' => 'Project accuracy is required!',
        ];
    }
}
