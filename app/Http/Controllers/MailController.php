<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Member;

class MailController extends Controller {
   
	public function index(){
   		return view('mail');

	}

	public function post(Request $request ){
		// Cập nhật email

		$objMember = Member::where('email_member', '=', $request->email)->get();

		if(count($objMember) <= 1) {
			$code = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',10)),0,8);
			$UpdateMail = Member::where('id_member', '=', session('id_member'))->update(['email_member' => $request->email,'code_member' => $code ] );

			$data = [
				'email' =>$request->email,
				'code' 	=>$code,
			];
			Mail::send('mail', $data , function($message) use ($data){
				$message->from('hotrosinhviendue@gmail.com','Email kích hoạt');
				$message->to($data['email']);
				$message->subject($data['email']);
			});
			$request->session()->flash('msg_kichhoat','Vui lòng login vào Email của bạn để lấy mã kích hoạt');
			return redirect()->back();
		} else {
			$request->session()->flash('msg_capnhat','Đã tồn tại Email này. Vui lòng chọn Email khác');
			return redirect()->route('sinhvien.user.index');
		}



		
	}
}