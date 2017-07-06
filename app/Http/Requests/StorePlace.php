<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlace extends FormRequest
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
            'name'              => 'sometimes|string|max:255',
            'address'           => 'required|string|max:255',
            'price'             => 'required|exists:prices,id',
            'tags.*'            => 'sometimes|nullable|max:255',
            'images.*'          => 'sometimes|nullable|image|max:3000',
            'sangkat'           => 'required|max:255',
            'khan'              => 'required|max:255',
            'latitude'          => 'required|max:255',
            'longitude'         => 'required|max:255',
            'city'              => 'required|max:255',
            'phones.*'          => 'sometimes|nullable|numeric|digits_between:9,10',
            'email'             => 'sometimes|nullable|max:255',
            'website'           => 'sometimes|nullable|max:255',
            'facebook'          => 'sometimes|nullable|max:255',
            'monday_close'      => 'required|hour',
            'monday_open'       => 'required|hour',
            'tuesday_close'     => 'required|hour',
            'tuesday_open'      => 'required|hour',
            'wednesday_close'   => 'required|hour',
            'wednesday_open'    => 'required|hour',
            'thursday_close'    => 'required|hour',
            'thursday_open'     => 'required|hour',
            'friday_close'      => 'required|hour',
            'friday_open'       => 'required|hour',
            'saturday_close'    => 'required|hour',
            'saturday_open'     => 'required|hour',
            'sunday_close'      => 'required|hour',
            'sunday_open'       => 'required|hour',
        ];
    }
}
