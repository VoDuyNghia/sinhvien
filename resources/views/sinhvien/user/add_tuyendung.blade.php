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
<form id='form' method="POST" action="{{ route('sinhvien.user.add_tuyendung') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="most-popular margin-b20">
		<h3 class="title14 main-bg">Đăng tin tuyển dụng</h3>
		<div class="post-box square" style="background: #fff;padding: 10px;">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="f-form margin-b10">
						<span style="font-size: 14px;color: #106299;margin-bottom: 5px;display: block;">
							<i class="fa fa-usd"></i> 
							Cần <span class="bold">0</span> 
							để đăng bản tin <span class="bold">Tuyển dụng</span>
						</span>
						<div class="row">
							<div class="col-md-2">
								Tiêu đề <span class="red">*</span>
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control" name="title_tuyendung" data-empty="false" value="{{ old('title_tuyendung') }}">
							</div>
						</div> <br/>
						<div class="row">
							
							<div class="col-md-12">
								Nội dung <span class="red">*</span>
								<textarea name="content" rows="7" cols="100" class="input-long" id="content" >{!! old('content')  !!}</textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="margin-b10">
						<div class="most-popular">
							<h3 class="title14 main-bg">Thông tin liên hệ</h3>
						</div>
						<div class="post-box square drop-shadow" style="padding: 5px -10px 15px;">
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Công ty <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="company" data-empty="false" value="{{ old('company') }}">
									</div>
								</div>
							</div>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Địa chỉ <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="address" data-empty="false" value="{{ old('address') }}">
									</div>
								</div>
							</div>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Điện thoại <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="phone" data-empty="false" value="{{ old('phone') }}" maxlength="10">
									</div>
								</div>
							</div>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Email <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="email" value="{{ old('email') }}">
									</div>
								</div>
							</div>
							<div class="f-form margin-b10">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Logo <span class="red">*</span>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="file" name="userImage" class="form-control" id="userImage" readonly="" style="cursor: pointer;width: 100%;" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="most-popular">
						<h3 class="title14 main-bg">Danh sách công việc </h3>
					</div>
					<div class="post-box square drop-shadow" style="padding: 5px -10px 15px;">
						<div class="f-form margin-b10">
							@for ($i = 0; $i < 5  ; $i++)
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										Công việc
									</div>
									<div class="col-md-8 col-sm-8 col-xs-8 mar-05">
										<input type="text" class="form-control" name="job[]" value="">
									</div>
								</div>
							@endfor
						</div>
					</div>
					<div class="text-right" style="margin-top: 10px;">
						<input type="hidden" name="s-form" value="f271a502581c151955b9b59b0ae4829d">
						<button type="submit" id="btn" class="btn-s2">Đăng bài</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
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

{{-- <script type="text/javascript">
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
 --}}

{{-- <script>
$(document).ready(function () {
    $('#gender').select2({
        placeholder: "Đối tượng cho thuê",
    });

    $('#donvithue').select2({
        placeholder: "Đơn vị",
    });
	
});
</script> --}}

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