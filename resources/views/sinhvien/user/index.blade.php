@extends('templates.sinhvien.master_member')
@php
 if(!session()->has('id_member')){
	header("Location: http://voduynghia.vne:8081/");
	exit();
 }
@endphp
@section('content')
<div class="">
		<div class="">
@include('templates.sinhvien.left_bar')
<div id="u-wrap">
<div class="row">
	<div class="col-md-4">
		<form method="POST" action="{{ route('edit')}}" id=''>
			{{ csrf_field() }}
			<div class="most-popular margin-b20">
				<h3 class="title14 main-bg">Thông tin tài khoản</h3>
				<div class="post-box square" style="background: #fff;padding-bottom: 10px;">
				@php

				@endphp       
					<div class="group-form">
						<div class="row f-form">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<div id="user-avatar">
									<img src="http://nguoiangiang.com/wp-content/themes/s2ag/images/icon-male.png" id="src-avatar"><input type="hidden" name="avatar" value=""><div class="overlay"><i class="fa fa-camera fa-3x"></i></div>								
								</div>
							</div>
						</div>
						<div class="row f-form">
							<div class="col-md-12 col-sm-12 col-xs-12">
								Họ và tên <span class="red">*</span>
								<input type="text" class="form-control" name="name" data-empty="false" value="{{ $objMember['fullname_member'] }}">
							</div>
						</div>
						<div class="row f-form">
							<div class="col-md-12 col-sm-12 col-xs-12">
								Địa chỉ
								<input type="text" class="form-control" name="address" value="{{ $objMember['address_member'] }}">
							</div>
						</div>
						<div class="row f-form">
							<div class="col-md-6 col-sm-6 col-xs-12">
								Ngày sinh
								<input type="date" class="form-control" name="birthday" maxlength="10" value="{{ $objMember['date_member'] }}">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								Giới tính <span class="red">*</span>
								<select name="gender" class="form-control" data-empty="false">
									@php
										if( $objMember['gender_member'] == 0){
									@endphp
										<option value="0" selected="">Nam</option>
										<option value="1" >Nữ</option>
									@php
									} else {
									@endphp
										<option value="0" >Nam</option>
										<option value="1" selected="">Nữ</option>
									@php
									} 
									@endphp
								</select>
							</div>
						</div>
						<div class="row f-form">
							<div class="col-md-12 col-sm-12 col-xs-12">
								Số điện thoại
								<input type="int" class="form-control" name="phone" maxlength="10" value="0{{ $objMember['hotline_member'] }}">
							</div>
						</div>
					</div>
					<div class="row f-form">
						<div class="col-md-12 text-center" style="margin-top: 10px;">
							<button type="submit" id="btn" class="btn-s2">Cập nhật</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@if($objMember['email_member'] =='')
<div class="col-md-7">
		<form method="POST" action="/postMail" id='form1'>
			{{ csrf_field() }}
			<div class="most-popular margin-b20">
				<h3 class="title14 fashion-bg">Tài khoản chưa kích hoạt</h3>
				<div class="post-box square" style="background: #fff;padding-bottom: 10px;"> 
					<div class="group-form">
						<div class="row f-form">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<label for="email">Email kích hoạt</label>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12 margin-b10">
								<input type="text" class="form-control" name="email" id="email" value="" data-empty="false">
							</div>
						</div>
					</div>
					@if(Session::has('msg_capnhat'))
						<div>
							<span style='text-align: center;font-weight: bold;'class="info-err">{{ Session::get('msg_capnhat') }}</span>
						</div>
					@endif
					<div class="row">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn-s2" id="btn-check" style="margin-top: 10px;">Gửi mail kích hoạt</button>
						</div>

					</div>
				</div>
			</div>
		</form>

	<script>
	 	$(document).ready(function() {
	 			$('#form1').validate({
				rules: {
					"email": {
						required: true,
						email: true
					},
				},
				messages: {
		 	 		"email": {
						required: '<span style="color: red"> Vui lòng nhập Email </span>',
						email: '<span style="color: red"> Vui lòng nhập đúng định dạng của Email </span>',
				  	},
				},
			});
	 	});
	</script>
	</div>
	</div>
@endif

@if($objMember['email_member'] <> '' and $objMember['active_member'] == 0)
<div class="col-md-7">
		<form method="POST" action="{{ route('active') }}" id='1'>
			{{ csrf_field() }}
			<div class="most-popular margin-b20">
				<h3 class="title14 fashion-bg">Tài khoản đang chờ kích hoạt</h3>
				<div class="post-box square" style="background: #fff;padding-bottom: 10px;"> 
					<div class="group-form">
						<div class="row f-form">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<label for="email">Email kích hoạt</label>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12 margin-b10">
								<input type="text" class="form-control" name="email_2" readonly="" id="email_2" value="{{ $objMember['email_member'] }} " data-empty="false">
							</div>
						</div>
					</div>
					<div class="group-form">
						<div class="row f-form">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<label for="email">Mã Kích Hoạt</label>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12 margin-b10">
								<input type="text" class="form-control" name="code" id="code" value="" data-empty="false">
							</div>
						</div>
						@if(Session::has('msg_kichhoat'))
							<div style='margin-bottom: 15px;'>
								<span style='text-align: center;font-weight: bold;'class="info-err">{{ Session::get('msg_kichhoat') }}</span>
							</div>
						@endif
					</div>
						<div class="col-md-12 text-center">
							<button type="submit" class="btn-s1" id="btn-check">Kích hoạt</button>
							<button type="button" class="btn-s3" id="btn-delcheck">Sử dụng email khác</button>
						</div>
				</div>
			</div>
		</form>
<script>
	$("#btn-delcheck").click(function() {
		var email = $("#email_2").val().trim();
		btn = $(this);
		btn.attr("disabled","disabled");
		p_form = $(this).closest("form");
		$.confirm({
			title: 'Sử dụng email khác?',
			content: '',
			buttons: {
				ok: {
					text: 'Đồng ý',
					btnClass: 'btn-blue',
					action: function(){
						var self = this;
						return $.ajax({
							url:'/public/templates/sinhvien/ajax/cancel_email.php',
							method: 'post',
							data:{email:email},
						}).done(function (response) {
						 	var msg = "";
		                    if(response == 1){
	                         	salert("success","Bạn đã hủy email thành công");
								setTimeout(function(){location.href='http://voduynghia.vne:8081/tai-khoan';},1000);
		                    }else {
		                        salert("warning", "Bị lỗi trong quá trình hủy. Vui lòng thử lại");
		                    } 
						});
					}
				},
				cancel:{
					text: 'Hủy bỏ',
					action: function(){
						btn.removeAttr("disabled");
					}
				},
			}
		});
	});
</script>
	<script>
	 	$(document).ready(function() {
	 			$('#form1').validate({
				rules: {
					"email": {
						required: true,
						email: true
					},
				},
				messages: {
		 	 		"email": {
						required: '<span style="color: red"> Vui lòng nhập Email </span>',
						email: '<span style="color: red"> Vui lòng nhập đúng định dạng của Email </span>',
				  	},
				},
			});
	 	});
	</script>
	</div>
	</div>

@endif

<script>
	$('#user-avatar').click(function(){
		image = $(this).find('[name=avatar]');
		select_image(image);
	});
</script></div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').toggleClass('active');
		});
	});
</script>
<style>
#slider-img{padding: 0;}
#u-wrap{margin-left: 210px; overflow: hidden;padding: 10px 15px;}
#sidebarCollapse{position: absolute;right: 100px;display: inline-block;color: #fff;}
#sidebarCollapse i{font-size: 30px;line-height: 50px; cursor: pointer;}
#sidebar {min-width: 210px;max-width: 210px;background: #101213;color: #fff;transition: all 0.3s;height: 100%;overflow: hidden;position: fixed;top: 0;z-index: 9999;
}
.sidebar-none{height: 95px;background: #057ac2;padding-top: 15px;}
.sidebar-none img{width: 160px;margin: 0 auto;}
#sidebar.active {margin-left: -250px;}
#sidebar .sidebar-header {padding: 5px;background: #101213;}
#sidebar ul li a {padding: 10px;font-size: 15px;display: block;color: #fff;}
#sidebar ul li a:hover {color: #231D1E;background: #fff;font-weight: bold;}
#sidebar ul li a i{margin-right: 10px;font-size: 12px;}
#sidebar ul li.active>a,
a[aria-expanded="true"]{color: #fff;background: #333;}
a[data-toggle="collapse"]{position: relative;}
#sidebar ul.sub-menu{background: #231D1E;}
#sidebar ul.sub-menu li a{padding-left: 25px;}
#sidebar ul.sub-menu li a:before {font: normal normal normal 14px/1 FontAwesome;content: "\f105";margin-right: 10px;color: #46b4cf;}
.dropdown-toggle::after {display: block;position: absolute;top: 50%;right: 20px;transform: translateY(-50%);}
.dropdown-toggle::after {display: inline-block;width: 0;height: 0;margin-left: .255em;vertical-align: .255em;content: "";border-top: .3em solid;border-right: .3em solid transparent;border-bottom: 0;border-left: .3em solid transparent;}
#info-user{color: #106299;text-align: left;margin: 0;padding: 5px;font-size: 14px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);border: 1px solid #ccc;}
#info-user li{color: #999; margin-left: 5px;font-size: 12px;}
#info-user li:before {font: normal normal normal 14px/1 FontAwesome;content: "\f105";margin-right: 5px;color: #46b4cf;}
#info-user span{font-weight: bold; color: #fff;}
#user-avatar, #user-avatar img,#user-avatar .overlay{width: 150px; height: 150px; margin: 0 auto; border-radius: 50%;}
#user-avatar img{border: 5px solid #ccc;}
#user-avatar{position: relative;}
#user-avatar .overlay{position: absolute; background: rgba(255, 255, 255, 0.5); opacity: 0; transition: opacity 1s;top: 0; right: 0;line-height: 175px;}
#user-avatar .overlay i{color: #fff;}
#user-avatar:hover .overlay{transition: opacity 1s; cursor: pointer;opacity: 1;}
#group-upload-image{position: relative;cursor: pointer;}
#group-upload-image i{color: #057ac2;position: absolute;right: 38%; bottom: 38%;}
#group-upload-image:hover i{color: #ccc;}
.delete-image{position: relative;cursor: pointer;}
.delete-image .overlay{position: absolute; background: rgba(0, 0, 0, 0.9); opacity: 0; transition: opacity 1s;top: 0; right: 0;width: 100%;height: 100%;}
.delete-image .overlay p:nth-child(1){color: #fff;text-align: center;margin-top: 10px;font-size: 20px;font-weight: bold;}
.delete-image .overlay p{color: yellow;font-size: 17px;text-align: center;}
.delete-image .overlay i{color: #607D8B;position: absolute;right: 3px;bottom: 3px;background: #fff;font-size: 23px;padding: 3px 5px;}
.delete-image .overlay i:hover{color: red;}
.delete-image:hover .overlay{transition: opacity 1s; cursor: pointer;opacity: 1;}
ul#group-image {padding: 0;overflow: hidden;}
ul#group-image li{margin-bottom: 4px; padding: 0 2px!important;}
ul#group-image li img{border: 1px solid #ccc; padding: 2px;width: 240px; height: 110px;}
ul#group-image li:hover img, ul#group-image li img.active{border-color: #116fa8;}
ul#group-image .select-image{position: absolute;bottom: 0;right: 0;padding: 3px 7px;line-height: 13px;display: inline-block;}
ul#group-image .select-image input[type="checkbox"]{width: 15px;height: 15px;cursor: pointer;}
.img-feature{cursor: pointer;border: 2px solid #057ac2;padding: 5px;}
@media (max-width: 992px) {
	#u-wrap{margin: 0 auto;margin-bottom: 35px;padding: 15px 10px;}
	#sidebar {margin-left: -210px;}
	#sidebar.active {margin-left: 0;}
	#sidebarCollapse span {display: none;}
	.sidebar-none{height: 45px;background: transparent;padding-top: 10px;}
	.sidebar-none img{width: 80px;margin: 0 auto;}
}
@media screen and (max-width: 480px) {
	#group-upload-image i{font-size: 35px;}
}
</style></div>
<nav class="sidenav" data-sidenav="" data-sidenav-toggle="#sidenav-toggle">
	<div class="sidenav-brand">
		
		<a href="http://nguoiangiang.com">
		<img src="http://nguoiangiang.com/wp-content/themes/s2ag/images/logo.png" class="img-responsive" alt="Trang thông tin về An Giang - Rao vặt miễn phí">
		</a>
			</div>
	<ul id="menu-menu-main-1" class="sidenav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-22"><a href="http://nguoiangiang.com">Trang chủ</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20 sidenav-menu-parent"><a data-sidenav-dropdown-toggle="" href="javascript:void(0)">Rao vặt<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon=""><i class="fa fa-sort-down"></i></span><span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon=""><i class="fa fa-sort-up"></i></span></a>
<ul class="sub-menu sidenav-dropdown" data-sidenav-dropdown="">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13"><a href="http://nguoiangiang.com/may-tinh-laptop/">Máy tính – Laptop</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10"><a href="http://nguoiangiang.com/dien-thoai/">Điện thoại</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://nguoiangiang.com/o-to-xe-may/">Ô tô – Xe máy</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9"><a href="http://nguoiangiang.com/dien-may/">Điện máy</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="http://nguoiangiang.com/viec-lam-them/">Việc làm thêm</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14"><a href="http://nguoiangiang.com/o-ghep-tim-phong/">Ở ghép – Tìm phòng</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7"><a href="http://nguoiangiang.com/cho-do-cu/">Chợ đồ cũ</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="http://nguoiangiang.com/thoi-trang/">Thời trang</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-21 sidenav-menu-parent"><a data-sidenav-dropdown-toggle="" href="javascript:void(0)">Người An Giang<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon=""><i class="fa fa-sort-down"></i></span><span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon=""><i class="fa fa-sort-up"></i></span></a>
<ul class="sub-menu sidenav-dropdown" data-sidenav-dropdown="">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="http://nguoiangiang.com/tin-tuc/">Tin tức</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11"><a href="http://nguoiangiang.com/du-lich/">Du lịch</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8"><a href="http://nguoiangiang.com/dac-san/">Đặc sản</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5"><a href="http://nguoiangiang.com/an-gi-o-dau/">Ăn gì – Ở đâu?</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12"><a href="http://nguoiangiang.com/khai-truong-khuyen-mai/">Khai trương – Khuyến mãi</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6"><a href="http://nguoiangiang.com/bat-dong-san/">Bất động sản</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18"><a href="http://nguoiangiang.com/tuyen-dung/">Tuyển dụng</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="http://nguoiangiang.com/hinh-anh/">Hình ảnh</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="http://nguoiangiang.com/lien-he/">Liên hệ</a></li>
</ul></nav>
<div class="bot-menu hidden-lg hidden-md">
			<div class="col-sm-5 col-xs-4 pad-0">
			<a href="http://nguoiangiang.com/tai-khoan/" class="btn-s2"><i class="fa fa-user"></i>Tài khoản</a>
		</div>
		<div class="col-sm-5 col-xs-4 pad-0">
			<a href="javascript:void(0)" class="btn-s3 btn-logout"><i class="fa fa-sign-out"></i>Đăng xuất</a>
		</div>
		<div class="col-sm-2 col-xs-4 pad-0">
		<a href="javascript:void(0)" class="btn-s4" id="sidenav-toggle"><i class="fa fa-bars"></i>Menu</a>
	</div>
</div>
	<script>
		$(".btn-logout").click(function(){
			$.ajax({
			    type: 'get',
			    url: '/public/templates/sinhvien/ajax/logout_member.php',
                success:function(response){
                    var msg = "";
                    if(response == 1){
                     	salert("success","Đăng xuất thành công ...");
						setTimeout(function(){location.href='http://voduynghia.vne:8081/';},1000);
                    } else {
                    	salert("warning","Có lỗi khi đăng xuất");
                    }
                }
			});
		});
	</script>

<a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/script.js?ver=27122018"></script>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/function.js?ver=27122018"></script>
<script type="text/javascript" src="/public/templates/libraries/jquery.validate.min.js"> </script>
</div>

@if (Session::has('msg_capnhat'))
    <script>
         $(document).ready(function() {
                salert("warning","Đã tồn tại Email này. Vui lòng chọn Email khác");
            }); 
    </script>
@endif

@if (Session::has('msg_updateMember'))
    <script>
         $(document).ready(function() {
            // $("#frmLoginAdd").click(function(){ 
                salert("success","Cập nhật thành công");
            }); 
        // });
    </script>
@endif

    
@endsection