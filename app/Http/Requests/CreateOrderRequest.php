<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 20:58
 */

namespace Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'product_id' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
