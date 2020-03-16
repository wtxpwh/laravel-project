<?php

namespace Buzzex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetPairRequest extends FormRequest
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
            'base' => 'filled|valid_exchange_item',
            'target' => 'filled|valid_exchange_item',
            'pair_id' => 'filled|valid_pair',
        ];
    }
}
