<nav id="sidebar">
	<div class="sidebar-none">
		<a href="http://nguoiangiang.com">
			<img src="http://nguoiangiang.com/wp-content/themes/s2ag/images/logo.png" class="img-responsive">
		</a>
	</div>
	<div class="sidebar-header">
		<ul id="info-user">
			<li>Loại tài khoản : <span>Thường</span></li>			<li>
				Được đăng :
				<span>3					<span style="font-weight: 500;"> bài viết/</span>
					<span style="font-weight: 500;">ngày</span>
				</span>
			</li>
			<li>Số hình ảnh được tải lên : <span>15</span></li>
		</ul>
	</div>
	<ul class="list-unstyled">
		<li class="active">
			<a href="http://nguoiangiang.com/tai-khoan/"><i class="fa fa-user"></i>Thông tin tài khoản</a>
		</li>
		<li>
			<a href="{{ route('sinhvien.user.add_raovat') }}">
				<i class="fa fa-list-ul"></i>Đăng tin rao vặt
			</a>
		</li>
		<li>
			<a href="#u-menu-post" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
				<i class="fa fa-pencil"></i>Đăng tin chuyên mục<span class="arrow"></span>
			</a>
			<ul class="collapse list-unstyled sub-menu" id="u-menu-post">
				<li>
					<a href="{{ route('sinhvien.user.add_room') }}">Thuê Phòng Trọ</a>
					<a href="{{ route('sinhvien.user.add_tuyendung') }}">Tin Tuyển Dụng</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=bai-dang"><i class="fa fa-book"></i>Bài đăng</a></li>
		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=hinh-anh"><i class="fa fa-image"></i>Quản lý hình ảnh</a></li>		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=da-luu"><i class="fa fa-save"></i>Đã Lưu</a></li>
		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=giao-dich"><i class="fa fa-usd"></i>Lịch sử giao dịch</a></li>
		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=binh-luan">
				<i class="fa fa-comment"></i>
				Bình luận 
				<span class="bold" style="margin-left:10px;color: yellow;">
					(<span id="count-comments">0</span>)
				</span>
			</a>
		</li>
		<li>
			<a href="http://nguoiangiang.com/tai-khoan/?type=doi-mat-khau"><i class="fa fa-unlock"></i>Đổi mật khẩu</a>
		</li>
	</ul>
</nav>

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
</style>

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

	