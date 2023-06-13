<?php

namespace App\Http\Requests\Admin\AboutUsRequests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsStoreRequest extends FormRequest
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
            'image' => 'required',
            'section' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            // 'description_ar' => 'required',
        ];
    }
}
