<?php

namespace App\Application\Requests\Admin\Services;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestServices extends FormRequest
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
            'icon' => 'required',
        ];
    }
}
