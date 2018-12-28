<?php

namespace App\Http\Controllers\SinhVien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function __construct(Member $objMember){
		$this->objMember = $objMember;
	}

    public function index() {
        $objMember = Member::where('id_member', '=', session('id_member'))->first();
    	return view('sinhvien.user.index', compact('objMember'));
    }

    public function getAdd() {
    	return view('sinhvien.user.register');
    }

    public function postAdd(Request $request) {
		if($this->objMember->addMember($request)){
			$request->session()->flash('msg');
			return redirect()->route('sinhvien.index.index');
		}
    }

    public function postEdit(Request $request){
        $UpdateMember = Member::where('id_member', '=', session('id_member'))->update(['fullname_member' => $request->name,'address_member' => $request->address, 'date_member' => $request->birthday, 'gender_member' => $request->gender, 'hotline_member' => $request->phone  ] );

        
        if($UpdateMember == true){
            $request->session()->flash('msg_updateMember','Đã cập nhật thành công');
            return redirect()->route('sinhvien.user.index');
        } else {
            $request->session()->flash('msg_updateMember','Cập nhật thất bại');
            return redirect()->route('sinhvien.user.index');
        }
    }

    public function UpdateCode(Request $request){
        $UpdateCode = Member::where('code_member', '=', $request->code)->orwhere('email_member','=', $request->email)->update(['active_member' => 1]);

        if($UpdateCode == true){
            $request->session()->flash('msg_updateMember','Đã cập nhật thành công');
            return redirect()->route('sinhvien.user.index');
        } else {
            $request->session()->flash('msg_updateMember','Cập nhật thất bại');
            return redirect()->route('sinhvien.user.index');
        }
    }
}
