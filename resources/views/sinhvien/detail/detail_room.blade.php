@extends('templates.sinhvien.master')
@section('content')
    @php
        $arr = [
            'name'  => str_slug($objNewsRoom->name_category),
            'id'    => $objNewsRoom->id_category,
        ];

		if($objNewsRoom['gender_room'] == 0) {
			$doituongthue = 'Nam';
		} elseif($objNewsRoom['gender_room'] == 1) {
			$doituongthue = 'Nữ';
		} else {
			$doituongthue = 'Tất cả';
		}
    @endphp

	<div class="container">
        <div class="row">
<div class="col-md-8 col-xs-12 margin-b10 p-l15" style="padding-left: 0;">
	<div class="listing-title color-border-top home-title" style="padding-bottom: 0;margin-bottom: 10px;">
		<h2 class="color-title pull-left">
			<a href="{{ route('sinhvien.cat.raovat',$arr) }}" title="{{ $objNewsRoom->name_category }}">{{ $objNewsRoom->name_category }}</a>
		</h2>
		<div class="bread-crumb pull-right">
			<ul class="list-inline-block">
				<li><a href="http://nguoiangiang.com" title="Người An Giang"><span class="fa fa-home"> </span></a></li>
				<li><a href="{{ route('sinhvien.cat.raovat',$arr) }}" title="{{ $objNewsRoom->name_category }}">{{ $objNewsRoom->name_category }}</a></li>
			</ul>									
		</div>
	</div>
	<div class="post-content">
		<div class="main-post-content">
			<div class="post-item border-bottom">
				<div class="listing-title color-border-top home-title margin-b10" style="padding-bottom: 0;">
					<h1>{{ $objNewsRoom['title_room'] }}</h1>
					<hr>
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<div class="post-info">
								<ul class="post-list-info" style="margin-bottom: 0;">
									<li>
										{{ $objNewsRoom['date_room'] }}
									</li>
									<li>
										Lượt xem : {{ $objNewsRoom['view_room'] }}				
									</li>
									<li class="post-cat">
										<a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $objNewsRoom->name_category }}</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-xs-12 text-right">
							<a href="javascript:void(0)" class="btn-s3" id="btn-clear"><i class="fa fa-trash"></i>Bỏ lưu</a>
							<script>
								$("#btn-clear").click(function(){
									btn = $(this);
									btn.attr("disabled","disabled");
									$.ajax({
										url : THEME_URL+'/data/users.php',
										type : 'post',
										data: {
											type : 'clear-post',
											post : 171,
										},
										success : function (result){
											if(result == "session" || result == "false"){
												salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
												setTimeout(function(){location.reload();},1000);
											}else if(result == "o-exists"){
												salert("warning","Có lỗi xảy ra - Bài viết chưa được lưu");
												setTimeout(function(){location.reload();},1000);
											}else{
												salert("success","Bỏ lưu bài viết thành công - Vui lòng đợi tải lại trang ...");
												setTimeout(function(){location.reload();},1000);
											}
										}
									});
								});
							</script>
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://nguoiangiang.com/bat-dong-san/dat-nen-ven-song-du%cc%a3-an-diamond-city/" class="btn-s2" target="_blank"><i class="fa fa-share"></i> Chia sẻ</a>
						</div>
					</div>
					<hr>
					<div class="header-table bg-01719f"><h3 class="title">THÔNG TIN PHÒNG TRỌ</h3></div>
					<table class="table table-bordered table-hover table-striped">
						<tbody>
							<tr>
								<td width="30%">Địa chỉ</td>
								<td width="70%">{{ $objNewsRoom['address_room'] }}</td>
							</tr>
							<tr>
								<td>Đối tượng cho thuê</td>
								<td>
									{{ $doituongthue }}
								</td>
							</tr>
							<tr>
								<td>Giá</td>
								<td>
									@if ($objNewsRoom['price_room'] <> '')
										{{ number_format($objNewsRoom['price_room']) }} VNĐ/Tháng
									@else
									<span style="color:red;font-weight:bold"> Giá thỏa thuận</span>
									@endif
									
								</td>
							</tr>
							<tr>
								<td>Lượt xem</td>
								<td>{{ $objNewsRoom['view_room'] }}</td>
							</tr>
						</tbody>
					</table>
					<div class="header-table bg-01719f"><h3 class="title">THÔNG TIN LIÊN HỆ</h3></div>
					<table class="table table-bordered table-hover table-striped">
						<tbody>
							<tr>
								<td width="30%">Họ tên</td>
								<td width="70%">{{$objNewsRoom['contact_username'] }}</td>
							</tr>
							<tr>
								<td>Địa chỉ</td><td>{{$objNewsRoom['contact_address'] }}</td>
							</tr>
							<tr>
								<td>Số điện thoại</td><td>{{$objNewsRoom['contact_hotline'] }}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{{$objNewsRoom['contact_email'] }}</td>
							</tr>
						</tbody>
					</table>
					<div class="border-post margin-b10">
						{!! $objNewsRoom['content_room'] !!}				
					</div>

<style>
.mySlides {display:none;}
</style>
					<div class="row">
						<div class="col-md-6" style="margin-bottom: 5px;">
							<div class="header-table"><h3 class="title">HÌNH ẢNH</h3></div>

							<div class="w3-content w3-display-container">

							@foreach ($objTotalImg as $valueTotal)
								@if ($valueTotal['name_totalroom'] <>'khonghinh.png')
									<img class="mySlides" src="/public/files/files_room/{{ $valueTotal->name_totalroom }}" style="width:100%">
								@else
									<img class="mySlides" src="/public/files/{{ $valueTotal->name_totalroom }}" style="width:100%">
								@endif
								
							@endforeach
							</div>
						</div>
<style>
	#map {
	height: 400px;  
	width: 100%; 
	}
</style>
							<div class="col-md-6" style="margin-bottom: 5px;">
							<div class="header-table"><h3 class="title">VỊ TRÍ</h3></div>
						  	<address>
						    	{{ $objNewsRoom['address_room'] }}
						  	</address>

  <script>
		$(document).ready(function(){
		  $("address").each(function(){                         
		    var embed ="<iframe width='355px' height='200' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://maps.google.com/maps?&amp;q="+ encodeURIComponent( $(this).text() ) +"&amp;output=embed'></iframe>";
		                                $(this).html(embed);
		                             
		   });
		});
  </script>

{{-- <script>
// Initialize and add the map

function initMap() {
	https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBehDfix2Dghf5Hjn7_TbFO16sd0nkUL9g

  // The location of Uluru
  var uluru = {lat: 16.057200, lng: 108.177880};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom:16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script> --}}



    {{-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR_1Mzor22s4ipqDX_DinARPGAXb00C0Y&callback=initMap">
    </script> --}}

							

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<style>
.mySlides {display:none;}
</style>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-style-archive">
		@foreach ($objNewsRoomLienQuan as $valuesRoomLienQuan)
		@php
			if($valuesRoomLienQuan['gender_room'] == 0) {
				$doituongthue = 'Nam';
			} elseif($valuesRoomLienQuan['gender_room'] == 1) {
				$doituongthue = 'Nữ';
			} else {
				$doituongthue = 'Tất cả';
			}

	        $arr1 = [
	            'name'  => str_slug($valuesRoomLienQuan->title_room),
	            'id'    => $valuesRoomLienQuan->id_room,
	        ];


	        if($valuesRoomLienQuan['img_room'] <> '') {
	        	$url = "/storage/app/public/files/files_room/". $valuesRoomLienQuan['img_room'];
	        } else {
	        	$url = "/public/files/khonghinh.png";
	        }
			        
		@endphp
			<div class="ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
					<a href="{{ route('sinhvien.detail.detail_room',$arr1) }}" title="{{$valuesRoomLienQuan->title_room}}">
						<div class="img-box">
							<img src="{{ $url }}" class="img-responsive">
						</div>
						</a>
				</div>
				<div class="col-md-9 col-sm-7 col-xs-12">
					<div class="row">
						<div class="content-area">
							<div class="col-md-9 col-sm-12 col-xs-12">
								<h3><a href="{{ route('sinhvien.detail.detail_room',$arr1) }}" title="{{$valuesRoomLienQuan->title_room}}">{{$valuesRoomLienQuan->title_room  }}</a></h3>
								<ul class="ad-meta-info">
									<li><i class="fa fa-map-marker"></i> Khu vực : <b>{{$valuesRoomLienQuan->address_room  }}</b></li>
								</ul>
								<div class="ad-details">
									<ul class="list-unstyled">
										<li>Đối tượng cho thuê:<b> {{$doituongthue}}</b></li> <br/>
										<li>Giá thuê : <b>
										@if ($valuesRoomLienQuan['price_room'] <> '')
											<span style="color:red;font-weight:bold">{{ number_format($valuesRoomLienQuan['price_room']) }} VNĐ / Tháng </span>
										@else
										<span style="color:red;font-weight:bold"> Giá thỏa thuận</span>
										@endif
											
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-xs-12 col-sm-12">
								<div class="short-info row">
									<div class="col-md-12 hidden-xs text-center">
										<div class="ad-stats">
											<span>Ngày đăng <br> </span>{{$valuesRoomLienQuan->date_room  }}			
										</div>
									</div>
									<div class="col-md-12 col-xs-12 text-center">
										<div class="ad-stats "><a href="http://nguoiangiang.com/bat-dong-san/ban-nha-duong-nguyen-binh-khiem-p-my-long-long-xuyen-dt-4-x-35m/" class="btn btn-s2" title="{{$valuesRoomLienQuan->title_room}}">Xem thêm</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@include('templates.sinhvien.left_bar_news')
</div>
</div>
@endsection
<style>
    .button {
 
  background-color: red;
 
  -webkit-border-radius: 10px;
 
  border-radius: 10px;
   
  border: none;
   
  color: #FFFFFF;
   
  cursor: pointer;
   
  display: inline-block;
   
  font-family: Arial;
   
  font-size: 15px;
   
  padding: 5px 10px;
   
  text-align: center;
   
  text-decoration: none;
 
}
@-webkit-keyframes glowing {
  0% { background-color: #004A7F; -webkit-box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; -webkit-box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; -webkit-box-shadow: 0 0 3px #004A7F; }
}
 
@-moz-keyframes glowing {
  0% { background-color: #004A7F; -moz-box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; -moz-box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; -moz-box-shadow: 0 0 3px #004A7F; }
}
 
@-o-keyframes glowing {
  0% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
}
 
@keyframes glowing {
  0% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
  50% { background-color: #0094FF; box-shadow: 0 0 10px #0094FF; }
  100% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
}
 
.button {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
</style>

