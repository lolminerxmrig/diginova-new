<?php

namespace Modules\Staff\Brand\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffBrandRequest extends FormRequest
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
        $data = $this->all();
        if($data['image'] !== 'not_required'){
            return [
                'name' => 'required',
                'en_name' => 'required',
                'description' => 'required',
                'categories' => 'required',
                'slug' => 'required',
                'type' => 'nullable',
                'image' => 'required',
            ];
        }
        else{
            return [
                'name' => 'required',
                'en_name' => 'required',
                'description' => 'required',
                'categories' => 'required',
                'slug' => 'required',
                'type' => 'nullable',
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
//
        ];
    }

}
