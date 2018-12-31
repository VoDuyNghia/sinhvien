@extends('templates.sinhvien.master')
@section('content')
    @php
        $arr = [
            'name'  => str_slug($objNewsRaoVat->name_category),
            'id'    => $objNewsRaoVat->id_category,
        ]
    @endphp

	<div class="container">
        <div class="row">
    <div class="col-md-8 col-xs-12 margin-b10 p-l15" style="padding-left: 0;">
    <div class="listing-title color-border-top home-title" style="padding-bottom: 0;margin-bottom: 10px;">
        <h1 class="color-title pull-left">
            <a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $objNewsRaoVat->name_category }}</a>
        </h1>
        <div class="bread-crumb pull-right">
            <ul class="list-inline-block">
                @php
                    $arr = [
                        'name'  => str_slug($objNewsRaoVat->name_category),
                        'id'    => $objNewsRaoVat->id_category,
                    ]
                @endphp
                <li><a href="{{ route('sinhvien.cat.raovat',$arr) }}"><span class="fa fa-home"> </span></a></li>
                <li><a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $objNewsRaoVat->name_category }}</a></li>
            </ul>                                   
        </div>
    </div>
    <div class="post-content">
		<div class="main-post-content">
			<div class="post-item border-bottom">
				<div class="listing-title color-border-top home-title" style="padding-bottom: 0;margin-bottom: 10px;">
					<h1>{{ $objNewsRaoVat['title_raovat'] }}</h1>
					<hr>

					<div class="row">
						<div class="col-md-8 col-xs-12">
							<div class="post-info">
								<ul class="post-list-info">
									<li>Ngày đăng: {{ $objNewsRaoVat['date_raovat'] }}</li>
									<li>Lượt xem : {{ $objNewsRaoVat['view_raovat'] }} </li>
									<li class="post-cat">
										Danh mục : 
										<a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $objNewsRaoVat->name_category }}</a>
									</li>
								</ul>
							</div>
						</div>
						@if (session()->has('id_member'))
						<div class="col-md-4 col-xs-12 text-right">
							<a href="javascript:void(0)" class="btn-s4" id="btn-save"><i class="fa fa-save"></i>Lưu tin</a>
						<script>
							$("#btn-save").click(function(){
								btn = $(this);
								btn.attr("disabled","disabled");
								$.ajax({
									url : THEME_URL+'/data/users.php',
									type : 'post',
									data: {
										type : 'save-post',
										post : 192,
									},
									success : function (result){
										if(result == "session" || result == "false"){
											salert("warning","Có lỗi xảy ra - Vui lòng đợi tải lại trang");
											setTimeout(function(){location.reload();},1000);
										}else if(result == "exists"){
											salert("warning","Có lỗi xảy ra - Bạn đã lưu bài viết này");
											setTimeout(function(){location.reload();},1000);
										}else if(result == "limit"){
											salert("warning","Có lỗi xảy ra - Bạn đã lưu 200 bài viết");
											btn.removeAttr("disabled");
										}else{
											salert("success","Lưu bài viết thành công - Vui lòng đợi tải lại trang ...");
											setTimeout(function(){location.reload();},1000);
										}
									}
								});
							});
						</script>
						<a href="https://www.facebook.com/sharer/sharer.php?u=http://nguoiangiang.com/tin-tuc/dem-bang-ba-chuc/" class="btn-s2" target="_blank"><i class="fa fa-share"></i> Chia sẻ</a>
						</div>
						@endif
					</div>
					<hr>
					<div class="post-detail margin-b10">
						<p> <strong>{{ $objNewsRaoVat['detail_raovat'] }}</strong></p>

					<p> {!! $objNewsRaoVat['content_raovat'] !!}</p> <hr/><hr/>

					@if ($objNewsRaoVat['id_choose'] <>4)
						<div class="header-table bg-01719f"><h3 class="title">THÔNG TIN LIÊN HỆ</h3></div>
						<table class="table table-bordered table-hover table-striped">
							<tbody>
								<tr>
									<td width="30%">Họ tên</td>
									<td width="70%">{{  $objNewsRaoVat['username_raovat'] }}</td>
								</tr>
								<tr>
									<td>Số điện thoại liên hệ</td>
									<td>
											@if ($objNewsRaoVat['hotline_raovat']<>'')
												0{{ $objNewsRaoVat['hotline_raovat'] }}
											@endif
										
									</td>
								</tr>
								<tr>
									<td>Facebook</td>
									<td>
										{{  $objNewsRaoVat['facebook_raovat'] }}
									</td>
								</tr>
							</tbody>
						</table>
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-style-archive row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		@foreach ($objNewsTinLienQuan as $valueTinLienQuan)
	        @php
	            $arrNewsLienQuan = [
	                'name1'  => str_slug($valueTinLienQuan->name_category),
	                'name'  => str_slug($valueTinLienQuan->title_raovat),
	                'id'    => $valueTinLienQuan->id_raovat,
	            ];

	            $urlPic = '/storage/app/public/files/files_raovat/'.$valueTinLienQuan->image_raovat;

	        @endphp
			<div class="items">
				<div class="items-img">
					<a href="{{ route('sinhvien.detail.detail_raovat',$arrNewsLienQuan) }}">
						<img src="{{ $urlPic }}" alt="{{ $valueTinLienQuan->name_raovat }}">
					</a>
				</div>
				<div class="items-content">
					<h4 style='line-height: 16px;' class="items-title">
                    	<a href="{{ route('sinhvien.detail.detail_raovat',$arrNewsLienQuan) }}"> {{ $valueTinLienQuan->title_raovat }} &nbsp &nbsp  <a href='{{ route('sinhvien.detail.detail_raovat',$arrNewsLienQuan) }}' class="button">{{ $valueTinLienQuan->name_choose }}</a>
                        </a>
					</h4>
					<p class="items-desc">
						{{ $valueTinLienQuan->detail_raovat }} 
					</p>
	

				</div>


			</div>
		@endforeach
	</div>
	</div>
    <div class="home-title color-border-bottom p5-10 margin-b10">
    </div>
      <div align="right">
        
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

