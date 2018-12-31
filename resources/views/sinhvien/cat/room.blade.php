@extends('templates.sinhvien.master')
@section('content')
    @php
        $arr = [
            'name'  => str_slug($objCat->name_category),
            'id'    => $objCat->id_category,
        ]
    @endphp

	<div class="container">
<div class="row">
<div class="col-md-8 col-xs-12 margin-b10 p-l15" style="padding-left: 0;">
	<div class="listing-title color-border-top home-title" style="padding-bottom: 0;">
		<h1 class="color-title pull-left">
			<a href="{{ route('sinhvien.cat.room',$arr) }}" title="{{  $objCat->name_category }}">
				{{  $objCat->name_category }}			
			</a>
		</h1>
		<div class="bread-crumb pull-right">
			<ul class="list-inline-block">
				<li><a href="{{ route('sinhvien.cat.room',$arr) }}" ><span class="fa fa-home"> </span></a></li>
				<li><a href="{{ route('sinhvien.cat.room',$arr) }}" title="{{  $objCat->name_category }}">
					{{  $objCat->name_category }}</a></li>
			</ul>									
		</div>
	</div>
	<div class="home-title color-border-bottom p10-25-0" style="padding: 20px 30px 0;">
		<div class="box-style-archive row">
			@foreach ($objNewsRoom as $valuesRoom)
				@php
					if($valuesRoom['gender_room'] == 0) {
						$doituongthue = 'Nam';
					} elseif($valuesRoom['gender_room'] == 1) {
						$doituongthue = 'Nữ';
					} else {
						$doituongthue = 'Tất cả';
					}

			        $arr1 = [
			            'name'  => str_slug($valuesRoom->title_room),
			            'id'    => $valuesRoom->id_room,
			        ];

			        if($valuesRoom['img_room'] <> '') {
			        	$url = "/storage/app/public/files/files_room/". $valuesRoom['img_room'];
			        } else {
			        	$url = "/public/files/khonghinh.png";
			        }
			        
				@endphp
				<div class="ad-listing clearfix">
					<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
						<a href="{{ route('sinhvien.detail.detail_room',$arr1) }}" title="{{ $valuesRoom['title_room'] }}">
							<div class="img-box">
								<img src="{{ $url }}" class="img-responsive" alt="{{ $valuesRoom['title_room'] }}">
							</div>
							</a>
							<div class="user-preview">
								<span style='color: white;background: rgba(0,0,0,.5); font-weight: bold;'> {{ $valuesRoom['img_total'] }} ảnh </span>
							</div>
					</div>
					<div class="col-md-9 col-sm-7 col-xs-12">
						<div class="row">
							<div class="content-area">
								<div class="col-md-9 col-sm-12 col-xs-12">
									<h3><a href="{{ route('sinhvien.detail.detail_room',$arr1) }}">{{ $valuesRoom['title_room'] }}</a></h3>
									<ul class="ad-meta-info">
										<li>Khu vực : <b>{{ $valuesRoom['address_room'] }}</b></li>
										<li><i class="fa fa-map-marker"></i> Đối tượng cho thuê : <span style="font-weight: bold"> {{ $doituongthue }}</span> </li>
									</ul>
									<div class="ad-details">
										<ul class="list-unstyled">
											@if ( $valuesRoom['price_room'] <> '')
												<li>Giá thuê : <b> {{ number_format($valuesRoom['price_room']) }} VNĐ/Tháng <span class="span-small"></span></b></li>
											@else
												<li>Giá thuê : <b> Giá thỏa thuận <span class="span-small"></span></b></li>
											@endif
											
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-xs-12 col-sm-12">
									<div class="short-info row">
										<div class="col-md-12 text-center">
											<div class="ad-stats">
												<span>Ngày đăng <br> </span>{{ $valuesRoom['date_room'] }}
											</div>
										</div>
										<div class="col-md-12 col-xs-12 text-center">
											<div class="ad-stats "><a href="{{ route('sinhvien.detail.detail_room', $arr1) }}" class="btn btn-s2">Xem thêm</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach

			</div>
				<div align="right" style="margin-top: 10px;">
        			{{ $objNewsRoom->links() }}
				</div>
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