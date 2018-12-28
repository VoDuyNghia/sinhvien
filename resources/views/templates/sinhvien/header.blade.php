@php
  use App\Category;
  use Illuminate\Support\Facades\Auth;
  session_start();
  ob_start();

  if(isset($_SESSION['arUser'])){
 	Session::put('id_member', $_SESSION['arUser']['id_member']);
  } else {
  	Session::flush();
  }
@endphp
<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<meta charset="UTF-8" />
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="pingpback" href="/xmlrpc.php" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="theme-color" content="#078dbf" />
	<link rel="icon" type="image/png" href="/{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/images/logo-color.png">
	<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://nguoiangiang.com" />
<meta property="og:site_name" content="Người An Giang" />
<meta property="og:image" content="/{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/images/image-feature/default-01.jpg"/>
<meta property="og:title" content="Người An Giang"/>
<meta property="og:description" content="rao vặt, mua bán, trao đổi, an giang, long xuyên, hình ảnh, nhanh chóng, tiện lợi, tin tức, du lịch, đặc sản, bất động sản, tuyển dụng, ăn gì ở đâu, khai trương khuyến mãi, máy tính laptop, điện thoại, ô tô xe máy, điện máy, việc làm thêm, ở ghép tìm phòng, chợ đồ cũ, thời trang, quảng cáo"/>
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Người An Giang" />
<meta name="twitter:description" content="rao vặt, mua bán, trao đổi, an giang, long xuyên, hình ảnh, nhanh chóng, tiện lợi, tin tức, du lịch, đặc sản, bất động sản, tuyển dụng, ăn gì ở đâu, khai trương khuyến mãi, máy tính laptop, điện thoại, ô tô xe máy, điện máy, việc làm thêm, ở ghép tìm phòng, chợ đồ cũ, thời trang, quảng cáo" />
<meta name="twitter:image" content="/{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/images/image-feature/default-01.jpg" />
<link rel="image_src" href="/{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/images/image-feature/default-01.jpg" />
<meta name="description" content="rao vặt, mua bán, trao đổi, an giang, long xuyên, hình ảnh, nhanh chóng, tiện lợi, tin tức, du lịch, đặc sản, bất động sản, tuyển dụng, ăn gì ở đâu, khai trương khuyến mãi, máy tính laptop, điện thoại, ô tô xe máy, điện máy, việc làm thêm, ở ghép tìm phòng, chợ đồ cũ, thời trang, quảng cáo" />
	<title>Sinh Viên Kinh Tế</title>
<link rel='dns-prefetch' href='//s.w.org' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/nguoiangiang.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.2"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-includes/css/dist/block-library/style.min.css?ver=5.0.2' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/bootstrap.min.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/font-awesome.min.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/jquery.datetimepicker.min.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/select2.min.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/select2-bootstrap.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/owl.carousel.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/dateselector.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/ionicons.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/hover.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/jquery-confirm.min.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/color.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/theme.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/style.css?ver=26122018' type='text/css' media='all' />
<link rel='stylesheet' href='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/css/responsive.css?ver=26122018' type='text/css' media='all' />
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/jquery.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/bootstrap.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/moment.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/jquery.datetimepicker.full.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/select2.full.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/jquery.Jcrop.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/jquery.dateselector.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/tinymce/tinymce.min.js'></script>
<script type='text/javascript' src='{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/js/
jquery-confirm.min.js'></script>
<link rel='https://api.w.org/' href='/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-includes/wlwmanifest.xml" /> 
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130212929-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-130212929-1');
	</script>
	<script>
		var THEME_URL = '{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag';
	</script>
</head>
<body>
	<div class="margin-b30">
		<div id="header-top">
			<div class="row">
				<div id="wrap-header-top">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div id="header-logo">
							
							<h1>
							<a href="http://nguoiangiang.com" title="Người An Giang">
							<img src="{{getenv('URL_TEMPLATE_SINHVIEN')}}/wp-content/themes/s2ag/images/logo.png" alt="Trang thông tin về An Giang - Rao vặt miễn phí" class="img-responsive">
							</a>
							</h1>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8 text-right">
						<a href="javascript:void(0)" id="search-header"><i class="fa fa-search"></i></a>
						@php
							if(isset($_SESSION['arUser'])){
						@endphp
							<div class="hidden-sm hidden-xs" style="display: inline-block;">
								<a href="/tai-khoan/" class="btn-s4"><i class="fa fa-user"></i>Tài khoản</a>
								<a href="javascript:void(0)" class="btn-s3 btn-logout"><i class="fa fa-sign-out"></i>Đăng xuất</a>
								</div>
							<div class="hidden-lg hidden-md" id="sidenav-toggle">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							
						@php
						} else {
						@endphp
							<div class="hidden-sm hidden-xs" style="display: inline-block;">
								<a href="/dang-ky/" class="btn-s1"><i class="fa fa-user-plus"></i>Đăng ký</a>
								<a href="javascript:void(0)" class="btn-s2 btn-login"><i class="fa fa-user"></i>Đăng nhập</a>
							</div>
							<div class="hidden-lg hidden-md" id="sidenav-toggle">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						@php
						} 
						@endphp
					</div>
				</div>
			</div>
		</div>
	{{-- 	<div id="group-search-header">
			<form>
				<div class="row">
					<div class="col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12 pad-05">
								<select name="select-category-search" class="form-control select2">
									<option value="">Tất cả danh mục</option>
									<option class="option" value="2">Bất động sản</option>
									<option class="option" value="3">Tuyển dụng</option>
									<option class="option" value="4">Ăn gì - Ở đâu?</option>
									<option class="option" value="5">Khai trương - Khuyến mãi</option>
									<option class="option" value="6">Máy tính - Laptop</option>
									<option class="option" value="7">Điện thoại</option>
									<option class="option" value="8">Ô tô - Xe máy</option>
									<option class="option" value="9">Điện máy</option>
									<option class="option" value="10">Việc làm thêm</option>
									<option class="option" value="11">Ở ghép - Tìm phòng</option>
									<option class="option" value="12">Thời trang</option>
									<option class="option" value="13">Chợ đồ cũ</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-9 pad-05">
								<input type="text" class="form-control" name="input-key-search" id="input-key-search" placeholder="Nhập từ khóa ..." data-empty="false">
							</div>
							<div class="col-md-2 col-sm-2 col-xs-3 pad-05">
								<a href="javascript:void(0)" id="find-search-header" class="btn btn-primary">
									<i class="fa fa-search"></i>
								</a>
								<a href="javascript:void(0)" id="close-search-header" class="btn btn-warning">
									<i class="fa fa-close"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script>
			$('#find-search-header').click(function(){
				btn = $(this);
				btn.attr("disabled","disabled");
				p_form = $(this).closest("form");
				key = p_form.find("[name=input-key-search]").val();
				category = p_form.find("[name=select-category-search]").val();
				if(!isEmpty(key)){
					location.href='http://nguoiangiang.com?s='+key+'&c='+category;
				}else{
					salert("warning","Bạn chưa nhập từ khóa");
					btn.removeAttr("disabled");
				}
			});
		</script> --}}
		<div id="menu-main" class="hidden-sm hidden-xs">
			<div class="container">
				<ul id="menu-menu-main" class="menu-main">
					<li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22"><a href="http://nguoiangiang.com">Trang chủ</a>
					</li>

					@foreach($objCats0 as $value)
					

					<li id="menu-item-{{ $value->id_category }}" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-{{ $value->id_category }}"><a >{{ $value->name_category }}</a>
			

					@php
						$objCatParent = Category::Where('parent_category','=', $value->id_category)->get();
					@endphp
						@if(count($objCatParent)>0)
							<ul class="sub-menu">
							@foreach($objCatParent as $valueParent)
								@php
								  $arr = [
								      'name' => str_slug($valueParent->name_category),
								      'id'   => $valueParent->id_category,
								  ]
								@endphp
								<li id="menu-item-{{ $valueParent->id_category }}" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-{{ $valueParent->id_category }}"><a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $valueParent->name_category }}</a></li>
							@endforeach
							</ul>
						@endif
					</li>
					@endforeach

					@foreach($objCats1 as $value1)
						<li id="menu-item-{{ $value1->id_category }}" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-{{ $value1->id_category }}"><a >{{ $value1->name_category }}</a>
						</li>
					@endforeach

					@foreach($objCats2 as $value2)
						<li id="menu-item-{{ $value2->id_category }}" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-{{ $value2->id_category }}"><a >{{ $value2->name_category }}</a>
						</li>
					@endforeach
					<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="/lien-he/">Liên hệ</a></li>
				</ul>				

<script>$(".menu-main li").has("ul").addClass("sub-menu");</script>
			</div>
		</div>
	</div>
