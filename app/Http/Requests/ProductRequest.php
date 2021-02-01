<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        //dd($this->request->get('file') );
          $rules = [
            'name'=>['required','max:50','min:2'],
            'description'=>['required','min:2'],
            'price'=>['required','min:2','numeric'],
            'file.*' => 'mimes:jpeg,png,jpg'
        ];
        // foreach($this->request->get('file') as $key => $val)
        // {
        //     dd( $rules['file.'.$key]);
        //   $rules['file.'.$key] = 'mimes:jpg,png,jpeg';
        // }

        return $rules;
    }
}
