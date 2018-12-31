<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'title_room'        => 'required|min:15|max:150|unique:tb_room',
            'content'           => 'required|min:50',
            'gender'            => 'required',
            'address_room'      => 'required',
            'contact_name'      => 'required',
            'address_user'      => 'required',
            'phone'             => 'required|numeric',
            'userImage'         => 'image',
            'file_img'          => 'image',
            
        ];
    }
    public function messages() {
        return [
            'title_room.required'    => 'Vui lòng nhập tiêu đề',
            'title_room.min'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_room.max'         => 'Tiêu đề tin trong khoảng từ 15 - 150 ký tự',
            'title_room.unique'      => 'Tiêu đề tin đã tồn tại',
            'content.required'       => 'Vui lòng nhập nội dung',
            'content.min'            => 'Nội dung phải trên 50 ký tự',
            'gender.required'        => 'Vui lòng nhập đối tượng cho thuê',
            'address_room.required'  => 'Vui lòng nhập địa chỉ phòng cho thuê',
            'contact_name.required'  => 'Vui lòng nhập họ tên của người cho thuê',
            'address_user.required'  => 'Vui lòng nhập địa chỉ của người cho thuê',
            'phone.required'         => 'Vui lòng nhập số điên thoại của người cho thuê',
            'phone.numeric'          => 'Số điện thoại nhập phải là số',
            'userImage.image'        => 'Định dạng phải là hình ảnh',
            'file_img.image'        => 'Định dạng phải là hình ảnh',
        ];
    }
}
