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
	<div class="row">
		<form enctype="multipart/form-data" id='form' action="{{ route('sinhvien.user.add_raovat') }}" method="POST">
			{{ csrf_field() }}
			<div class="col-md-9 col-sm-8 col-xs-12">
				<div class="most-popular margin-b20">
					<h3 class="title14 main-bg">Đăng tin rao vặt</h3>
					<div class="post-box square" style="background: #fff;padding: 10px;">
						<span style="font-size: 14px;color: #106299;">
							** Miễn phí đăng bài **
						</span>
						
						<div class="row margin-b10">
							<div class="col-md-5">
								<div class="f-form">
									Thể loại <span class="red">*</span>
									<select id='choose' name="choose" class="form-control select2 select2-hidden-accessible" data-empty="false" tabindex="-1" aria-hidden="true">
										<option value="" disabled="" selected=""></option>
										@foreach ($objChoose as $valuesChoose)
											@if (old('choose') <> $valuesChoose->id_choose)
												<option id='abc'  value="{{ $valuesChoose->id_choose }}">{{ $valuesChoose->name_choose }}</option>
											@else
												<option id='abc'  selected='' value="{{ $valuesChoose->id_choose }}">{{ $valuesChoose->name_choose }}</option>
											@endif
										@endforeach
									</select>
									
									<script>
										$(document).ready(function () {
									        $('#choose').select2({
									            placeholder: "Chọn thể loại",
									        });
											$('#choose').on("change", function(e) { 
											  var val = $(this).val();
											  if(val == 4) {
											  	$('#formlienhe').hide();
											  } else {
											  	$('#formlienhe').show();
											  }
											});
									    });
									</script>
								</div>
							</div>
							<div class="col-md-7">
								<div class="f-form">
									Danh mục <span class="red">*</span>
									<select id='category' name="category" class="form-control select2 select2-hidden-accessible" data-empty="false" tabindex="-1" aria-hidden="true">
										<option value="" disabled="" selected="">Chọn danh mục</option>
										@foreach ($objCategory as $valuesCategory)
											

											@if (old('category') <> $valuesCategory->id_category)
													<option id='abc'  value="{{ $valuesCategory->id_category }}">{{ $valuesCategory->name_category }}</option>
												@else
													<option id='abc'  selected='' value="{{ $valuesCategory->id_category }}">{{ $valuesCategory->name_category }}</option>
											@endif
										@endforeach
									</select>
									<script>
										$(document).ready(function () {
									        $('#category').select2({
									            placeholder: "Chọn danh mục tin",
									        });
									    });
									</script>
								</div>
							</div>
						</div>

						<div class="f-form margin-b10">
							<div class="row">
								<div class="col-md-2">
									Tiêu đề <span class="red">*</span>
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control" name="title_raovat" data-empty="false" placeholder="Vui lòng nhập tiêu đề tin" value="{{ old('title_raovat') }}">
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-2">
									Chi tiết <span class="red">*</span>
								</div>
								<div class="col-md-10">
									<textarea name="chitiet" rows="7" cols="90" class="input-long" id="chitiet" style="height: 65px;">{{ old('chitiet') }} </textarea>
								</div>
							</div>
						</div>

						<div class="f-form">
							{{-- <textarea name="chitiet" id="chitiet" cols="30" rows="10"></textarea> --}}
								<div class="col-md-2">
									Nội dung <span class="red">*</span>
								</div>
							<textarea name="content" value="" rows="7" cols="100" class="input-long" id="content" >{!! old('content') !!}</textarea>
						</div>
						<div id='formlienhe' style='text-align: center' class="row margin-b10">
							<div  class="col-md-4">
								<div class="f-form">
									Họ tên<br/>
									<input type="text" name="username" data-empty="false" placeholder="Có thể để trống" value="{{ old('username') }}">
								</div>
							</div>
							<div class="col-md-4">
								<div class="f-form">
									Số điện thoại liên hệ<br/>
									<input type="text" name="hotline" data-empty="false" placeholder="Có thể để trống" maxlength="10" value="{{ old('hotline') }}">
								</div>
							</div>

							<div class="col-md-4">
								<div class="f-form">
									Facebook <br/>
									<input type="text" name="facebook" data-empty="false" placeholder="Có thể để trống" value="{{ old('facebook') }}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="most-popular">
					<h3 class="title14 main-bg">Chọn hình đại diện</h3>
				</div>
				<div class="post-box square" style="background: #fff;padding: 5px;">
					<div class="f-form">
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
				<div class="text-right" style="margin-top: 10px;">
					<button  style='display: -webkit-box;margin-top: 45px;'type="submit" id="btn" class="btn-s2">Đăng bài</button>
				</div>
			</div>
		</form>
	</div>

	<script>
	 	CKEDITOR.replace( 'content', {
	 	});

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
<style>
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


</div>

</div>




<a href="#" class="scroll-top radius6"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/script.js?ver=27122018"></script>
<script type="text/javascript" src="http://nguoiangiang.com/wp-content/themes/s2ag/js/function.js?ver=27122018"></script>
<script type="text/javascript" src="/public/templates/libraries/jquery.validate.min.js"> </script>
</div>

@if (Session::has('msg_postRaovat'))
    <script>
    	if({{ Session::get('msg_postRaovat') }} == true){
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