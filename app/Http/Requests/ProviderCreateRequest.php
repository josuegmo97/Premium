<?php

namespace premium\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderCreateRequest extends FormRequest
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
            'rif' => 'required',
            'company' => 'required',
            'direction' => '',
            'phone' => 'required',
            'email' => '',
            'service_id' => 'required',
        ];
    }
}
