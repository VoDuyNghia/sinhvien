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
			@if ($errors->any())
				<div class="alert alert-danger">
				    <ul>
				        @foreach ($errors->all() as $error)
				            <li>* {{ $error }}</li>
				        @endforeach
				    </ul>
				</div>
			@endif
<form id='form' enctype="multipart/form-data" action="{{ route('sinhvien.user.add_room') }}" method="POST">
	{{ csrf_field() }}
	<div class="most-popular margin-b10">
		<h3 class="title14 main-bg">Đăng tin thuê phòng trọ</h3>
		<div class="post-box square" style="background: #fff;padding: 10px;">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="f-form margin-b10">
						<span style="font-size: 14px;color: #106299;margin-bottom: 5px;display: block;">
						<div class="row">
							<div class="col-md-2">
								Tiêu đề <span class="red">*</span>
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control" name="title_room"  value="{{ old('title_room') }}">
							</div>
						</div>
					</div>
					<div class="f-form">
						<textarea name="content" value="" rows="7" cols="100" class="input-long" id="content" >{!! old('content') !!}</textarea>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="margin-b10">
						<div class="most-popular">
							<h3 class="title14 main-bg">Thông tin Phòng trọ</h3>
						</div>
						<div class="post-box square drop-shadow" style="padding: 5px -10px 15px;">
							<div class="row margin-b10">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<span style="margin-top: 10px;display: block;">
										Đối tượng cho thuê <span class="red">*</span>
									</span>
								</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
									<select id='gender' name="gender" class="form-control select2 select2-hidden-accessible" data-empty="false" tabindex="-1" aria-hidden="true">
										<option value="" disabled="" selected=""><option>
										<option class="option" value="0">Nam</option>
										<option class="option" value="1">Nữ</option>
										<option class="option" value="2">Cả nam và nữ</option>
									</select>
									</div>
							</div>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Giá thuê
									</div>
									<div class="col-md-4 col-sm-4 col-xs-8 text-center mar-05">
										<input type="text" class="form-control" id="price" name="price" value="">
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-right">
										<span style="font-size: 13px;font-style: italic;margin-left: -17px;">
											Để trống nếu thỏa thuận
										</span>
									</div>
								</div>
							</div>
							<div class="f-form margin-b10">
								<span style='color:red;font-weight: bold' id='getPrice'> </span> VNĐ/ Tháng
							</div>
							<script>
								function formatNumber(nStr, decSeperate, groupSeperate) {
						            nStr += '';
						            x = nStr.split(decSeperate);
						            x1 = x[0];
						            x2 = x.length > 1 ? '.' + x[1] : '';
						            var rgx = /(\d+)(\d{3})/;
						            while (rgx.test(x1)) {
						                x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
						            }
						            return x1 + x2;
						        }
								$(function(){
								    $("#price").keyup(function () {
								        var value = $(this).val();
								        if(value == 0) {
								        	$("#getPrice").text(0);
								        } else {
								        	$("#getPrice").text(formatNumber(value,'.', '.'));
								        }
								        
								    }).keyup();
								});
							</script>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Số nhà , tên đường <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="address_room" data-empty="false" value="{{ old('address_room') }}">
									</div>
								</div> <br/>

								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Quận <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<select id='county' name="county" class="form-control select2 select2-hidden-accessible" data-empty="false" tabindex="-1" aria-hidden="true">
											<option class="option" value="Ngũ Hành Sơn">Ngũ Hành Sơn</option>
											<option class="option" value="Sơn Trà">Sơn Trà</option>
											<option class="option" value="Hải Châu">Hải Châu</option>
											<option class="option" value="Thanh Khê">Thanh Khê</option>
											<option class="option" value="Liên Chiểu">Liên Chiểu</option>
											<option class="option" value="Cẩm Lệ">Cẩm Lệ</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="most-popular">
						<h3 class="title14 main-bg">Thông tin liên hệ</h3>
					</div>
					<div class="post-box square drop-shadow" style="padding: 5px -10px 15px;">
						<div class="f-form margin-b10">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									Họ và tên <span class="red">*</span>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
									<input type="text" class="form-control" name="contact_name" data-empty="false" value="{{ old('contact_name') }}">
								</div>
							</div>
						</div>
						<div class="f-form margin-b10">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									Địa chỉ <span class="red">*</span>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
									<input type="text" class="form-control" name="address_user" value="{{ old('address_user') }}">
								</div>
							</div>
						</div>
						<div class="f-form margin-b10">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									Điện thoại <span class="red">*</span>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
									<input type="number" class="form-control" value='{{ old('phone') }}' name="phone" data-empty="false" maxlength="10">
								</div>
							</div>
						</div>
						<div class="f-form margin-b10">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									Email
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
									<input type="text" class="form-control" name="email" value="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="most-popular margin-b20">
				<h3 class="title14 main-bg">Hình trình diễn</h3>
				<div class="post-box square" style="background: #fff;padding: 10px;">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							
								<div class="f-form margin-b10" style="position:relative;">
									<input multiple="" type="file" class="form-control" name="file_img[]"  id="file_img" readonly="" placeholder="Nhấp để chọn hình" style="cursor: pointer;">
									{{-- <button type="button" class="btn btn-warning clear-image" style="position: absolute;top: 0;right: 0;"><i class="fa fa-remove"></i></button> --}}
								</div>

								<p style="margin-left: 20px;margin-bottom: 0;color: red;text-align: center;margin-top: 5px;">
								Xuất hiện khi bài đăng được đọc
							</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="f-form">
								{{-- <div id="group-slider-img" class="top-slider1 ion-small">
									<ul id="slider-img" data-pagination="true" data-paginumber="true" data-navigation="false" data-itemscustom="[[0,1],[980,1]]" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
									</ul>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="most-popular margin-b10">
				<h3 class="title14 main-bg">Hình đại diện</h3>
				<div class="post-box square" style="background: #fff;padding: 10px;">
						<div class="bgColor">
							<div id="targetOuter">
								<div id="targetLayer"></div>
								<img src="/photo.png"  class="icon-choose-image" />
								<div class="icon-choose-image" >
								<input style=" width: 100%; background-size: 110px 110px;display: inline-block;text-indent: -999999px;cursor: pointer;color: transparent;border: 4px dashed #ddd;padding: 20px; margin-bottom: 25px;" name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
								</div>
							</div>
							<label id="userImage-error" class="error" for="userImage"></label>
						</div>
				</div>
			</div>
			<div class="text-right">
				<input type="hidden" name="s-form" value="dc624fbcb060ec33babe3d04f63c4ed0">
				<button type="submit" id="btn" class="btn-s2">Đăng bài</button>
			</div>
		</div>
	</div>
</form>

	<script>
	 	$(document).ready(function() {
			$("#file_img").on("change", function() {
				if($("#file_img")[0].files.length > 5) {
					var input = $("#file_img");
				 	input.replaceWith(input.val('').clone(true));
					alert("Bạn chỉ có thể chọn tối đa 5 hình");
				} 
			});	

	 		CKEDITOR.replace( 'content', {
		 	});
	 	});
	</script>

</div>

</div>

<style>
#cke_1_contents{
	height: 300px;
}
.bgColor {
    max-width: 440px;
    height: 100%;
    padding: 30px;
    border-radius: 4px;
	text-align: center;    
}
#targetOuter{	
	position:relative;
    text-align: center;
    margin: 20px auto;
    width: 200px;
    height: 200px;
	border-radius: 4px;
}
.btnSubmit {
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
	cursor:pointer;
}
.inputFile {
    padding: 5px 0px;
	margin-top:8px;	
    background-color: #FFFFFF;
    width: 48px;	
    overflow: hidden;
	opacity: 0;	
	cursor:pointer;
}
.icon-choose-image {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -24px;
    margin-left: -24px;
    width: 48px;
    height: 48px;
}
</style>
<script type="text/javascript">
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
			$("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
			$("#targetLayer").css('opacity','0.7');
			$(".icon-choose-image").css('opacity','0.5');
        }
		fileReader.readAsDataURL(objFileInput.files[0]);
    }
}
</script>

</div>

</div>

<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url:'/public/templates/sinhvien/ajax/ajax_upload.php',
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
			$("#targetLayer").css('opacity','1');
			setInterval(function() {$("#body-overlay").hide(); },500);
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>


<script>
$(document).ready(function () {
    $('#gender').select2({
        placeholder: "Đối tượng cho thuê",
    });

    $('#donvithue').select2({
        placeholder: "Đơn vị",
    });
	
});
</script>


<a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/script.js?ver=27122018"></script>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/function.js?ver=27122018"></script>
</div>

@if (Session::has('msg_postPostRoom'))
    <script>
    	if({{ Session::get('msg_postPostRoom') }} == true){
 			salert("success","Đã đăng tin thành công");
            function Redirect() {
               window.location="{{ route('sinhvien.index.index') }}";
            }
            setTimeout('Redirect()', 2000);
 		} else {
 			salert("warning","Đăng tin thất bại");
            function Redirect1() {
               window.location="{{ route('sinhvien.user.add_raovat') }}";
            }
            setTimeout('Redirect()', 2000);
 		}
    </script>
@endif
@endsection