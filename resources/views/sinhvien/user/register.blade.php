@php
 if(session()->has('id_member')){
	header('Location: http://voduynghia.vne:8081/');
	exit;
	die();
 } 
@endphp
@extends('templates.sinhvien.master')
@section('content')
<script type="text/javascript" src="/public/templates/libraries/jquery.validate.min.js"> </script>
	<div class="container">
		<div class="row">
		<div class="col-md-8 col-xs-12 margin-b10 p-l15" style="padding-left: 0;">
	<h1 class="margin-b20">ĐĂNG KÝ TÀI KHOẢN</h1>


	<form id='frmLoginAdd' method="POST" action="{{ route('sinhvien.user.register') }}">
		{{ csrf_field() }}
		<div class="most-popular margin-b10 p5" style="padding: 10px;border: 1px solid #ccc;background: #fff;">
			<h3 class="title14 main-bg">Thông tin tài khoản</h3>
			<div class="post-box square">                                   
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							Tên đăng nhập <span class="red">*</span>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" class="form-control" name="username" data-empty="false">
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							Mật khẩu <span class="red">*</span>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" class="form-control" name="password" >
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							Xác nhận mật khẩu <span class="red">*</span>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" class="form-control" name="password-vertify">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="most-popular margin-b10 p5" style="padding: 10px;border: 1px solid #ccc;background: #fff;">
			<h3 class="title14 main-bg">Thông tin cá nhân</h3>
			<div class="post-box square"> 
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-5">
							Họ và tên <span class="red">*</span>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-7">
							<input type="text" class="form-control" name="name" data-empty="false">
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-5">
							Địa chỉ
						</div>
						<div class="col-md-8 col-sm-8 col-xs-7">
							<input type="text" class="form-control" name="address">
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-5">
							Ngày sinh
						</div>
						<div class="col-md-4 col-sm-4 col-xs-7">
							<input type="date" class="form-control" name="birthday" >
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-5">
							Giới tính <span class="red">*</span>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-7">
							<select name="gender" class="form-control" data-empty="false">
								<option value="0">Nam</option>
								<option value="1">Nữ</option>
							</select>
						</div>
					</div>
				</div>
				<div class="f-form margin-b10">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-5">
							Số điện thoại
						</div>
						<div class="col-md-4 col-sm-4 col-xs-7">
							<input type="number" class="form-control" name="phone" >
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row f-form">
			<div class="col-md-12 text-center">
				<label for="check-role" style="cursor: pointer; margin: 5px 0;">
					<input type="checkbox" name="check-role" id="check-role" style="cursor: pointer;">
					<b>
						Tôi đã đọc và đồng ý với <a href="http://nguoiangiang.com/dieu-khoan-su-dung/">Điều lệ đăng tin</a> của 
						<a href="http://nguoiangiang.com" alt="Trang thông tin về An Giang - Rao vặt miễn phí">
							Người An Giang						</a>
					</b> <br/>
					<label id="check-role-error" class="error" for="check-role"><span style="color: red"> </span></label>
				</label>
			</div>
			<div class="col-md-12 text-center" style="margin-top: 5px;">
				<input type="hidden" name="s-form" value="ba439441eac27877773890663213bdee">
				<button  type="submit" id="btn" class="btn-s1"><i class="fa fa-user-plus"></i>Đăng ký</button>
			</div>
		</div>
	</form>
</div>
	<script>
	 	$(document).ready(function() {
	 			$('#frmLoginAdd').validate({
				rules: {
					"username": {
						required: true,
						minlength: 6,
						maxlength: 30,
					},

					"password": {
						required: true,
						minlength: 6,
						maxlength: 30,
					},

					"password-vertify": {
						required: true,
						minlength: 6,
						maxlength: 30,
						// equalTo: "#password",
					},

					"name": {
						required: true,
						minlength: 5,
						maxlength: 100,
					},
					"address": {
						required: true,
						minlength: 15,
						maxlength: 150,
					},

					"birthday": {
						required: true,
						minlength: 10,
						maxlength: 10,
					},

					"gender": {
						required: true,
					},

					"phone": {
						required: true,
					},

					"check-role": {
						required: true,
					},


				},
				messages: {
		 	 		"username": {
						required: '<span style="color: red"> Vui lòng nhập Tài khoản </span>',
						minlength: '<span style="color: red;">Tên đăng nhập phải từ 6 - 30 ký tự</span>',
						maxlength: '<span style="color: red;">Tên đăng nhập phải từ 6 - 30 ký tự</span>',
				  	},
				  	"password": {
						required: '<span style="color: red"> Vui lòng nhập Mật khẩu </span>',
						minlength: '<span style="color: red;">Mật khẩu phải từ 6 - 30 ký tự</span>',
						maxlength: '<span style="color: red;">Mật khẩu phải từ 6 - 30 ký tự</span>',
				  	},
				  	"password-vertify": {
						required: '<span style="color: red"> Vui lòng nhập lại Mật khẩu </span>',
						minlength: '<span style="color: red;">Mật khẩu phải từ 6 - 30 ký tự</span>',
						maxlength: '<span style="color: red;">Mật khẩu phải từ 6 - 30 ký tự</span>',
						// equalTo: '<span style="color: red;">Mật khẩu không trùng khớp</span>',
				  	},
				  	"name": {
						required: '<span style="color: red"> Vui lòng nhập Họ và Tên </span>',
						minlength: '<span style="color: red;">Họ và tên phải từ 5 - 100 ký tự</span>',
						maxlength: '<span style="color: red;">Họ và tên phải từ 5 - 100 ký tự</span>',
				  	},
				  	"address": {
						required: '<span style="color: red"> Vui lòng nhập Địa Chỉ </span>',
						minlength: '<span style="color: red;">Địa chỉ phải từ 15 - 150 ký tự</span>',
						maxlength: '<span style="color: red;">Địa chỉ phải từ 15 - 150 ký tự</span>',
				  	},
				  	"birthday": {
						required: '<span style="color: red"> Vui lòng nhập Ngày Sinh </span>',
				  	},
				  	"gender": {
						required: '<span style="color: red"> Vui lòng nhập Giới Tính </span>',
				  	},
				  	"phone": {
						required: '<span style="color: red"> Vui lòng nhập Số Điện Thoại </span>',
						minlength: '<span style="color: red;">Số điện thoại phải 10 số</span>',
						maxlength: '<span style="color: red;">Số điện thoại phải 10 số</span>',
				  	},
				  	"check-role": {
						required: '<span style="color: red"> Bạn chưa đồng ý với điều khoản của chúng tôi </span>',
				  	},
				},
			});
	 	});
	</script>

@include('templates.sinhvien.left_bar_news')
</div>
</div></div>
@endsection