<?php

namespace App\Application\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestSlider extends FormRequest
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
            'title.*' => 'required',
            'des.*' => 'required',
            'image' => 'image',
            'background_image' => 'image',
            'link' => 'required',
        ];
    }
}
