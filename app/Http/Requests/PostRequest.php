<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
           'judul' => 'required|min:3|unique:posts',
           'category_id' => 'required',
           'content' => 'required|min:10',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
       ];
     }
}
