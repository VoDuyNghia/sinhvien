<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'choose'            => 'required',
            'category'          => 'required',
            'title_raovat'      => 'required|min:15|max:150|unique:tb_raovat',
            'chitiet'           => 'required|min:50|max:200',
            'content'           => 'required|min:100',
            'userImage'         => 'image',
        ];
    }
    public function messages() {
        return [
            'choose.required'  => 'Vui lòng nhập thể loại',
            'category.required'  => 'Vui lòng nhập danh mục',
            'title_raovat.required'    => 'Vui lòng nhập tiêu đề',
            'title_raovat.min'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_raovat.max'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_raovat.unique'      => 'Tiêu đề tin đã tồn tại',
            'chitiet.required'         => 'Vui lòng nhập chi tiết tin',
            'chitiet.min'              => 'Chi tiết tin trong khoảng từ 50 - 150 ký tự',
            'chitiet.max'              => 'Chi tiết tin trong khoảng từ 50 - 150 ký tự',
            'content.required'         => 'Vui lòng nhập nội dung',
            'content.min'              => 'Nội dung phải trên 100 ký tự',
            'gender.required'          => 'Vui lòng nhập đối tượng cho thuê',
            'userImage.image'          => 'Định dạng phải là hình ảnh',
        ];
    }
}
