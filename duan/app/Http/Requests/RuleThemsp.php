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
            'luotxem'=> ['required'],
            'namsanxuat'=> ['required'],
            'idVoucher'=> ['required'],
            'yeuthich'=> ['required'],
            'quantity'=> ['required'],
            'idTacgia'=> ['required'],
            'idNhaxuatban'=> ['required'],
            'moTa'=> ['required'],
            'tomTat'=> ['required'],
            'img'=> ['required']
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Phải nhập tên sản phẩm',
            'price.required' => 'Phải nhập giá sản phẩm',
            'priceSale.required'=> 'Có thể nhập 0',
            'luotxem.required'=> 'Có thể nhập 0',
            'namsanxuat.required'=> 'Nhập năm sản xuất',
            'idVoucher.required'=> 'Nhập thêm voucher',
            'quantity.required'=> 'Có thể nhập 0',
            'yeuthich.required'=> 'Có thể nhập 0',
            'idTacgia.required'=> 'Phải nhập tên tác giả',
            'idNhaxuatban.required'=> 'Phải nhập nhà xuất bản',
            'ngayDang.required'=> 'Cần nhập ngày đăng ',
            'moTa.required'=> 'Phải có mô tả',  
            'tomTat.required'=> 'Phải có tóm tắt',  
            'tomTat.required'=> 'Có thể nhập 0',  
            'img.required'=> 'Phải có hình ảnh'
        ];
    }
}
