<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleThemsp extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required'],
            'priceSale'=> ['required'],
            'nhacungcap'=> ['required'],
            'nhaxuatban'=> ['required'],
            'tacgia'=> ['required'],
            'moTa'=> ['required'],
            'idCategory'=> ['required'],
            'img'=> ['required']
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Phải nhập tên sản phẩm',
            'price.required' => 'Phải nhập giá sản phẩm',
            'priceSale.required'=> 'Có thể nhập 0',
            'nhacungcap.required'=> 'Phải nhập nhà cung cấp',
            'nhaxuatban.required'=> 'Phải nhập nhà xuất bản',
            'tacgia.required'=> 'Phải nhập tên tác giả',
            'ngayDang.required'=> 'Cần nhập ngày đăng ',
            'moTa.required'=> 'Phải có mô tả',
            'idCategory.required'=> 'Phải có danh mục sản phẩm',
            'img.required'=> 'Phải có hình ảnh'
        ];
    }
}
