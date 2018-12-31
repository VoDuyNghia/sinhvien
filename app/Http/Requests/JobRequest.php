<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title_tuyendung'             => 'required|min:15|max:150|unique:tb_tuyendung',
            'content'                     => 'required|min:50',
            'company'                     => 'required',
            'address'                     => 'required',
            'email'                       => 'required|email',
            'phone'                       => 'required|numeric',
            'img_tuyendung'               => 'image|mimes:jpg,png',
            
        ];
    }
    public function messages() {
        return [
            'title_tuyendung.required'    => 'Vui lòng nhập tiêu đề',
            'title_tuyendung.min'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_tuyendung.max'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_tuyendung.unique'      => 'Tiêu đề tin đã tồn tại',
            'content.required'            => 'Vui lòng nhập nội dung',
            'content.min'                 => 'Nội dung phải trên 50 ký tự',
            'company.required'            => 'Vui lòng nhập tên công ty',
            'address.required'            => 'Vui lòng nhập địa chỉ công ty',
            'phone.required'              => 'Vui lòng nhập số điên thoại liên hệ',
            'phone.numeric'               => 'Số điện thoại nhập phải là số',
            'email.required'              => 'Vui lòng nhập email tuyển dụng',
            'email.email'                 => 'Vui lòng nhập đúng định dạng email',
            'img_tuyendung.image'         => 'Định dạng phải là hình ảnh',
            'img_tuyendung.mimes'         => 'Định dạng file ảnh là : jpg,png',
        ];
    }
}
