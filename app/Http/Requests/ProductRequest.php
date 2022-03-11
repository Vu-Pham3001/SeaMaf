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
        return [
            'name-product' => 'required',
            'categori_id' => 'required',
            'img' => 'required',
            'description' => 'required',
            'code' => 'required',
            'price' => 'required'
        ];
    }

    public function message()
    {
        return [
            'name-product.required' => 'Vui lòng điền tên sản phẩm',
            'categori_id.required' => 'Vui lòng điển thể loại sản phẩm',
            'img.required' => 'vui lòng thêm ảnh',
            'description.required' => 'Vui lòng thêm mô tả',
            'code.required' => 'Vui lòng thêm mã sản phẩm',
            'price.required' => 'Vui lòng thêm giá sản phẩm'
        ];
    }
}
