	<div id="footer">
		<div class="padding-tb20 border-top border-bottom background-white">
			<div class="container">
				<div class="topics bread-crumb">
					<span class="main-bg">Danh mục</span>
					<ul class="list-inline-block">
						<li>
							<a href="/may-tinh-laptop/" title="Máy tính - Laptop">Máy tính - Laptop</a>
							</li><li>
							<a href="/dien-thoai/" title="Điện thoại">Điện thoại</a>
							</li><li>
							<a href="/o-to-xe-may/" title="Ô tô - Xe máy">Ô tô - Xe máy</a>
							</li><li>
							<a href="/dien-may/" title="Điện máy">Điện máy</a>
							</li><li>
							<a href="/viec-lam-them/" title="Việc làm thêm">Việc làm thêm</a>
							</li><li>
							<a href="/o-ghep-tim-phong/" title="Ở ghép - Tìm phòng">Ở ghép - Tìm phòng</a>
							</li><li>
							<a href="/thoi-trang/" title="Thời trang">Thời trang</a>
							</li><li>
							<a href="/cho-do-cu/" title="Chợ đồ cũ">Chợ đồ cũ</a>
							</li>					</ul>
				</div>
			</div>          
		</div>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="footer-logo">
							
							<a href="http://nguoiangiang.com" title="Người An Giang">
							<img src="{{ getenv('URL_TEMPLATE_SINHVIEN') }}/wp-content/themes/s2ag/images/logo.png" alt="Trang thông tin về An Giang - Rao vặt miễn phí" class="img-responsive">
							</a>
														<ul class="list-none footer-list margin-b10">
								<li class="col-xs-6">
									<a href="/may-tinh-laptop/" title="Máy tính - Laptop">Máy tính - Laptop</a>
									</li><li class="col-xs-6">
									<a href="/dien-thoai/" title="Điện thoại">Điện thoại</a>
									</li><li class="col-xs-6">
									<a href="/o-to-xe-may/" title="Ô tô - Xe máy">Ô tô - Xe máy</a>
									</li><li class="col-xs-6">
									<a href="/dien-may/" title="Điện máy">Điện máy</a>
									</li><li class="col-xs-6">
									<a href="/viec-lam-them/" title="Việc làm thêm">Việc làm thêm</a>
									</li><li class="col-xs-6">
									<a href="/o-ghep-tim-phong/" title="Ở ghép - Tìm phòng">Ở ghép - Tìm phòng</a>
									</li><li class="col-xs-6">
									<a href="/thoi-trang/" title="Thời trang">Thời trang</a>
									</li><li class="col-xs-6">
									<a href="/cho-do-cu/" title="Chợ đồ cũ">Chợ đồ cũ</a>
									</li>							</ul>                       
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-head row">
							<div class="col-md-7 col-xs-8 margin-b10">
								<h3 class="title14 bold hidden-xs">Chuyên mục</h3>
								<ul class="footer-list list-none">
									<li>
										<a href="/bat-dong-san/" title="Bất động sản">Bất động sản</a>
										</li><li>
										<a href="/tuyen-dung/" title="Tuyển dụng">Tuyển dụng</a>
										</li><li>
										<a href="/an-gi-o-dau/" title="Ăn gì - Ở đâu?">Ăn gì - Ở đâu?</a>
										</li><li>
										<a href="/khai-truong-khuyen-mai/" title="Khai trương - Khuyến mãi">Khai trương - Khuyến mãi</a>
										</li>								</ul>
							</div>
							<div class="col-md-5 col-xs-4">
								<h3 class="title14 bold hidden-xs">Người An Giang</h3>
								<ul class="footer-list list-none">
									<li><a href="/tin-tuc/">Tin tức</a></li>
									<li><a href="/du-lich/">Du lịch</a></li>
									<li><a href="/dac-san/">Đặc sản</a></li>
									<li><a href="/hinh-anh/">Hình ảnh</a></li>
								</ul>
							</div>
						</div>
						<ul class="list-btn-footer margin-b15">
							@php
								if(isset($_SESSION['arUser'])){
							@endphp	
								<li><a href="http://nguoiangiang.com/tai-khoan/" class="btn-s4"><i class="fa fa-user"></i>Tài khoản</a></li>
								<li><a href="javascript:void(0)" class="btn-s3 btn-logout"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
							@php
							}else {
							@endphp
							<li><a href="/dang-ky/" class="btn-s1"><i class="fa fa-user-plus"></i>Đăng ký</a></li>
							<li><a href="javascript:void(0)" class="btn-s2 btn-login"><i class="fa fa-user"></i>Đăng nhập</a></li>
							@php
							}
							@endphp
						</ul>
						<div class="text-center margin-b10">
							<a href="/dieu-khoan-su-dung/" class="btn-s5">
								<i class="fa fa-question-circle"></i> Điều khoản sử dụng
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<h3 class="title14 bold"><a href="/hinh-anh/" class="a-footer">Hình ảnh An Giang</a></h3>
						<div class="box-image-footer">
							
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://i.imgur.com/dCM47Ot.jpg);">
								<a href="/hinh-anh/?slug=nhau-noi-canh-dep">
								<img class="pulse-grow" src="https://i.imgur.com/dCM47Ot.jpg" alt="Nhậu nơi cảnh đẹp">
								</a>
								</div>
								</div>
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://i.imgur.com/K91Ikew.jpg);">
								<a href="/hinh-anh/?slug=ga-dot-tri-ton-thot-not-trai-tim">
								<img class="pulse-grow" src="https://i.imgur.com/K91Ikew.jpg" alt="Gà đốt Tri Tôn - Thốt nốt trái tim">
								</a>
								</div>
								</div>
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://i.imgur.com/jlqAz2W.jpg);">
								<a href="/hinh-anh/?slug=buon-uom-bao-ton-duoc-lieu-va-hoa-kieng-o-nui-cam">
								<img class="pulse-grow" src="https://i.imgur.com/jlqAz2W.jpg" alt="Vườn ươm bảo tồn dược liệu và hoa kiểng ở núi Cấm">
								</a>
								</div>
								</div>
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://i.imgur.com/ARUmJOk.jpg);">
								<a href="/hinh-anh/?slug=ho-ta-pa-an-giang-tuyet-tinh-coc-cua-mien-tay-cuc-hut-phuot-thu">
								<img class="pulse-grow" src="https://i.imgur.com/ARUmJOk.jpg" alt="Hồ Tà Pạ, An Giang: “Tuyệt tình cốc” của miền Tây cực hút phượt thủ">
								</a>
								</div>
								</div>
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://i.imgur.com/TdKEwX0.jpg);">
								<a href="/hinh-anh/?slug=tham-hiem-nhung-noi-chon-bi-an-tren-5-con-duong-xuyen-rung-dep-ngut-ngan">
								<img class="pulse-grow" src="https://i.imgur.com/TdKEwX0.jpg" alt="Thám Hiểm Những Nơi Chốn Bí Ẩn Trên 5 Con Đường Xuyên Rừng Đẹp Ngút Ngàn">
								</a>
								</div>
								</div>
								<div class="col-xs-4" style="padding: 0 5px;">
								<div class="group-box-image-footer" style="background-image: url(https://drive.google.com/uc?id=1rn7KSe9jmT6qIRT2YFJXOt5rGcjP0xXF);">
								<a href="/hinh-anh/?slug=canh-dep-an-giang-check-in-cuc-ao">
								<img class="pulse-grow" src="https://drive.google.com/uc?id=1rn7KSe9jmT6qIRT2YFJXOt5rGcjP0xXF" alt="Cảnh đẹp An Giang check-in cực ảo">
								</a>
								</div>
								</div>						</div>
					</div>
				</div>
			</div>  
		</div>
		<div style="height: 10px;background: #242424;;"></div>
	</div>
<nav class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
	<div class="sidenav-brand">
		
		<a href="http://nguoiangiang.com">
		<img src="{{ getenv('URL_TEMPLATE_SINHVIEN') }}/wp-content/themes/s2ag/images/logo.png" class="img-responsive" alt="Trang thông tin về An Giang - Rao vặt miễn phí">
		</a>
			</div>
	<ul id="menu-menu-main-1" class="sidenav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22"><a href="http://nguoiangiang.com">Trang chủ</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20"><a>Rao vặt</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13"><a href="/may-tinh-laptop/">Máy tính &#8211; Laptop</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10"><a href="/dien-thoai/">Điện thoại</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="/o-to-xe-may/">Ô tô &#8211; Xe máy</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9"><a href="/dien-may/">Điện máy</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="/viec-lam-them/">Việc làm thêm</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14"><a href="/o-ghep-tim-phong/">Ở ghép &#8211; Tìm phòng</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7"><a href="/cho-do-cu/">Chợ đồ cũ</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="/thoi-trang/">Thời trang</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-21"><a>Người An Giang</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="/tin-tuc/">Tin tức</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11"><a href="/du-lich/">Du lịch</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8"><a href="/dac-san/">Đặc sản</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5"><a href="/an-gi-o-dau/">Ăn gì &#8211; Ở đâu?</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12"><a href="/khai-truong-khuyen-mai/">Khai trương &#8211; Khuyến mãi</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6"><a href="/bat-dong-san/">Bất động sản</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18"><a href="/tuyen-dung/">Tuyển dụng</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="/hinh-anh/">Hình ảnh</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="/lien-he/">Liên hệ</a></li>
</ul></nav>
<div class="bot-menu hidden-lg hidden-md">
		<div class=" col-sm-5 col-xs-4 pad-0">
			<a href="/dang-ky/" class="btn-s1"><i class="fa fa-user-plus"></i>Đăng ký</a>
		</div>
		<div class="col-sm-5 col-xs-4 pad-0">
			<a href="javascript:void(0)" class="btn-s2 btn-login"><i class="fa fa-user"></i>Đăng nhập</a>
		</div>
		<div class="col-sm-2 col-xs-4 pad-0">
		<a href="javascript:void(0)" class="btn-s4" id="sidenav-toggle"><i class="fa fa-bars"></i>Menu</a>
	</div>
</div>
	<div class="chatbox">
		<div class="chat-head hidden-sm hidden-xs">
			<h4><span class="fa fa-comments comm"></span> <span class="element">&nbsp; Liên hệ Người An Giang</span> <i class="fa fa-angle-up" style="display: block;"></i></h4>
			<div class="minimizer" style="display: none;">
				<i class="fa fa-minus"></i>
				<i class="fa fa-times"></i>
			</div>
		</div>
		<div class="chat-body">
			<div>
				<div class="fb-page" data-href="https://www.facebook.com/nguoiangiang.fanpage/" data-tabs="messages" data-width="350" data-height="330" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote></blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="chatbox-mobile" class="hidden-lg hidden-md"><i class="fa fa-comments"></i></div>
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content border-radius-0">
				<div class="modal-body">
					<button type="button" class="close-login" data-dismiss="modal" aria-hidden="true">X</button>
					<div class="col-md-6 mar-pad-0">
						<div id="div-login">
							<h2 class="color-title">Đăng nhập</h2>
							<form id='frmLogin' method="POST", action = "">
								<div class="form-group f-form">
									<input type="text" id="txt_uname" name="login_user" placeholder="Tên đăng nhập" class="form-control" data-empty="false">
									<style>
										.error{
											font-size: 11px; 
											font-weight: bold;
										}
									</style>
									<label id="txt_uname-error" class="error" for="txt_uname"></span></label>
									<i class="fa fa-user login-field-icon"></i>
								</div>
								<div class="form-group f-form">
									<input type="password" id= 'txt_pwd' name="pass_user" placeholder="Mật khẩu" class="form-control" data-empty="false">
									<label id="txt_pwd-error" class="error" for="txt_pwd"></span></label>
									<i class="fa fa-lock login-field-icon"></i>
								</div>
								<div class="text-center">
									<button type="button" id="btn-login" class="btn-s2">Đăng nhập</button>
									 <div id="message" style='font-weight: bold;color: red;'></div>
								</div>
							</form>
							<div id="login-footer" class="text-center">
								<p>
									<a href="javascript:void(0)" id="tab-modal-password">Quên mật khẩu?</a> 
									<span style="margin: 0 5px; font-weight: bold;"> | </span>
									<a href="/dang-ky/">Tài khoản mới</a>
								</p>
							</div>
						</div>
						<div id="div-password" style="display: none;">
							<h2 class="color-title">Quên mật khẩu?</h2>
							<form>
								<div class="form-group f-form">
									<input type="text" name="username" placeholder="Tên đăng nhập" class="form-control" data-empty="false">
									<i class="fa fa-user login-field-icon"></i>
								</div>
								<div class="form-group f-form">
									<input type="text" name="email" placeholder="Email" class="form-control" data-empty="false">
									<i class="fa fa-envelope login-field-icon"></i>
								</div>
								<div class="text-center">
									<button type="button" id="btn-password" class="btn-s2">Lấy mật khẩu</button>
								</div>
							</form>
							<div id="login-footer" class="text-center">
								<p>
									<a href="javascript:void(0)" id="tab-modal-login">Đăng nhập</a> 
									<span style="margin: 0 5px; font-weight: bold;"> | </span>
									<a href="/dang-ky/">Tài khoản mới</a>
								</p>
							</div>
							<p class="red text-center">
								Chỉ có thể lấy lại mật khẩu với <span class="bold cl-46a040">Tài Khoản</span> đã có xác nhận 
								<span class="bold cl-46a040">Email</span>
							</p>
						</div>
					</div>
					<div class="col-md-6 hidden-xs hidden-sm mar-pad-0 bg-login">
						<div class="most-popular margin-b10">
							<a href="http://www.amthucphuongnam.com/" target="_blank"><img src="https://drive.google.com/uc?id=1ccnuC47KapNUZYPU_rwFPBhic_v3PdWC" class="img-responsive" style="width: 100%;"></a>						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<script>
	 	$(document).ready(function() {
	 			$('#frmLogin').validate({
				rules: {
					"login-user": {
						required: true,
					},

					"pass-user": {
						required: true,
					},
				},
				messages: {
		 	 		"login-user": {
						required: '<span style="color: red"> Vui lòng nhập Tài khoản </span>',
				  	},
				  	"pass-user": {
						required: '<span style="color: red"> Vui lòng nhập Mật khẩu </span>',
				  	},
				},
			});
	 	});

		$('#modal-login').modal({
			backdrop: 'static',
			keyboard: false
		});
		$('#modal-login').modal('hide');
		$(".btn-login").click(function(){
			$('#modal-login').modal('show');
		});
		$("[name='login-user'], [name='pass-user']").keypress(function (e) {
			if (e.which == 13) $("#btn-login").trigger("click");
		});
		$('#tab-modal-password').click(function(){
			$('#div-login').show();
			$('#div-login').hide();
			$('#div-password').show();
		});
		$('#tab-modal-login').click(function(){
			$('#div-login').show();
			$('#div-login').show();
			$('#div-password').hide();
		});
		// $("#btn-login").click(function(){
		// 	btn = $(this);
		// 	btn.attr("disabled","disabled");
		// 	p_form = $(this).closest("form");
		// 	p_form.find(".info-err").remove();
		// 	username =  p_form.find("[name=login-user]").val();
		// 	password =  p_form.find("[name=pass-user]").val();
		// 	p_username = p_form.find("[name=login-user]");
		// 	p_password = p_form.find("[name=pass-user]");
		// 	if(empty(p_form.find("[data-empty=false]")) == false){
		// 		var formData = new FormData(p_form[0]);
		// 		formData.append('type','login-user');
		// 		$.ajax({
		// 			url : '/public/templates/sinhvien/ajax/ajax_user.php',
		// 			type : 'post',
		// 			data: formData, 
		// 			beforeSend: function() {
		// 				p_form.addClass('form-loading');
		// 			},
		// 			success : function (result){
		// 				if(result == "session" || result == "false"){
		// 					salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
		// 					setTimeout(function(){location.reload();},1000);
		// 				}else if(result == "user"){
		// 					err(p_username, "Tên đăng nhập hoặc mật khẩu không đúng");
		// 					salert("warning","Có lỗi xảy ra - Vui lòng xem lại thông tin đã nhập");
		// 					btn.removeAttr("disabled");
		// 				}else if(result == "status"){
		// 					err(p_username, "Tài khoản của bạn đã bị khóa");
		// 					salert("warning","Có lỗi xảy ra - Vui lòng xem lại thông tin đã nhập");
		// 					btn.removeAttr("disabled");
		// 				}else{
		// 					salert("success","Đăng nhập thành công ...");
		// 					setTimeout(function(){location.href='/public/templates/sinhvien/ajax/ajax_user.php';},1000);
		// 				}
		// 			},
		// 			complete: function() {
		// 				p_form.removeClass('form-loading');
		// 			},
		// 			cache: false,
		// 			contentType: false,
		// 			processData: false
		// 		});
		// 	}else{
		// 		salert("warning","Bạn chưa nhập đủ thông tin yêu cầu");
		// 		btn.removeAttr("disabled");
		// 	}
		// 	btn.removeAttr("disabled");
		// });

		    $("#btn-login").click(function(){
	         	var username = $("#txt_uname").val().trim();
   			 	var password = $("#txt_pwd").val().trim();
		        if( username != "" && password != "" ){
		            $.ajax({
		                url:'/public/templates/sinhvien/ajax/ajax_user.php',
		                type:'post',
		                data:{username:username,password:password},
		                success:function(response){
		                    var msg = "";
		                    if(response == 1){
	                         	salert("success","Đăng nhập thành công ...");
								setTimeout(function(){location.href='http://voduynghia.vne:8081/tai-khoan';},1000);
		                    }else if(response == 0){
		                    	msg = "Vui lòng xem lại thông tin đã nhập";
		                        salert("warning", "Tên đăng nhập hoặc mật khẩu không đúng");
		                    } else {
		                    	msg = "Tài khoản của bạn đã bị khóa";
		                        salert("warning", "Tài khoản của bạn đã bị khóa");
		                    }
		                   	$("#message").html(msg);
		                }
		            });
		        }else {
		        	var message = "<span style='color:red;'> Không được rỗng</span>";
		        	$(".error").html(message);
		        	salert("warning","Bạn chưa nhập đủ thông tin yêu cầu");
		        }
		    });
 			
		///
		// $("#btn-password").click(function(){
		// 	btn = $(this);
		// 	btn.attr("disabled","disabled");
		// 	p_form = $(this).closest("form");
		// 	p_form.find(".info-err").remove();
		// 	username =  p_form.find("[name=username]").val();
		// 	email =  p_form.find("[name=email]").val();
		// 	p_username = p_form.find("[name=username]");
		// 	p_email = p_form.find("[name=email]");
		// 	if(empty(p_form.find("[data-empty=false]")) == false){
		// 		var formData = new FormData(p_form[0]);
		// 		formData.append('type','forget-password');
		// 		$.ajax({
		// 			url : THEME_URL+'/data/process.php',
		// 			type : 'post',
		// 			data: formData, 
		// 			beforeSend: function() {
		// 				p_form.addClass('form-loading');
		// 			},
		// 			success : function (result){
		// 				if(result == "session" || result == "false"){
		// 					salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
		// 					setTimeout(function(){location.reload();},5000);
		// 				}else if(result == "user"){
		// 					err(p_username, "Tên đăng nhập không tồn tại");
		// 					salert("warning","Có lỗi xảy ra - Vui lòng xem lại thông tin đã nhập");
		// 					btn.removeAttr("disabled");
		// 				}else if(result == "email"){
		// 					err(p_email, "Email không đúng hoặc chưa kích hoạt");
		// 					salert("warning","Có lỗi xảy ra - Vui lòng xem lại thông tin đã nhập");
		// 					btn.removeAttr("disabled");
		// 				}else{
		// 					salert("success","Vui lòng kiểm tra Email ...");
		// 					setTimeout(function(){location.href='http://nguoiangiang.com';},1000);
		// 				}
		// 			},
		// 			complete: function() {
		// 				p_form.removeClass('form-loading');
		// 			},
		// 			cache: false,
		// 			contentType: false,
		// 			processData: false
		// 		});
		// 	}else{
		// 		salert("warning","Bạn chưa nhập đủ thông tin yêu cầu");
		// 		btn.removeAttr("disabled");
		// 	}
		// 	btn.removeAttr("disabled");
		// });
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
<script type='text/javascript' src='{{ getenv('URL_TEMPLATE_SINHVIEN') }}/wp-content/themes/s2ag/js/script.js'></script>
<script type='text/javascript' src='{{ getenv('URL_TEMPLATE_SINHVIEN') }}/wp-content/themes/s2ag/js/function.js'></script>
<script type="text/javascript" src="/public/templates/libraries/jquery.validate.min.js"> </script>
</body>
</html>
