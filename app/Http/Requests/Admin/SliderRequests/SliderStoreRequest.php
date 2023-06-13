<?php

namespace App\Http\Requests\Admin\SliderRequests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'link_ar' => 'required',
            'link_en' => 'required',
            'image_ar' => 'required|image',
            'image_en' => 'required|image',
            'image_mobile_ar' => 'required|image',
            'image_mobile_en' => 'required|image',
        ];
    }
}
