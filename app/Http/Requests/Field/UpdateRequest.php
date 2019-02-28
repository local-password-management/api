<?php

namespace App\Http\Requests\Field;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'required|min:3|max:50',
            'value' => 'required|max:255',
            'project_id' => 'required',
            'field_group_id' => 'required',
        ];
    }
}
