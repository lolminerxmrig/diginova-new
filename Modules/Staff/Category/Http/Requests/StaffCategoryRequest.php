<?php

namespace Modules\Staff\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffCategoryRequest extends FormRequest
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
                'slug' => 'required',
                'en_name' => 'required',
                'image' => 'required',
//                'parent_id' => 'required',
            ];
        }
        else{
            return [
                'name' => 'required',
                'slug' => 'required',
                'en_name' => 'required',
                'parent_id' => 'required',
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

        ];
    }

}
