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
    <div class="listing-title color-border-top home-title" style="padding-bottom: 0;margin-bottom: 10px;">
        <h1 class="color-title pull-left">
            <a href="{{ route('sinhvien.cat.raovat',$arr) }}">{{ $objCat->name_category }}</a>
        </h1>
        <div class="bread-crumb pull-right">
            <ul class="list-inline-block">
                @php
                    $arr = [
                        'name'  => str_slug($objCat->name_category),
                        'id'    => $objCat->id_category,
                    ]
                @endphp
                <li><a href="{{ route('sinhvien.cat.raovat',$arr) }}"><span class="fa fa-home"> </span></a></li>
                <li><a href="http://nguoiangiang.com/may-tinh-laptop/">{{ $objCat->name_category }}</a></li>
            </ul>                                   
        </div>
    </div>
    <div class="home-title color-border-bottom p5-10 margin-b10">
        @foreach ($objNewsRaoVat as $valuesRaovat)
            <div class="box-style-archive row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="items">
                        <div class="items-img">
                            @php
                                $arrRaoVat = [
                                    'name1'  => str_slug($objCat->name_category),
                                    'name'  => str_slug($valuesRaovat->title_raovat),
                                    'id'    => $valuesRaovat->id_raovat,
                                ]

                            @endphp
                            <a href="{{ route('sinhvien.detail.detail_raovat',$arrRaoVat) }}" title="{{ $valuesRaovat->title_raovat }}">
                                <img src="http://nguoiangiang.com/wp-content/uploads/2018/12/dem-bang-ba-chuc.jpg" class="img-responsive" alt="{{ $valuesRaovat->title_raovat }}">
                            </a>
                        </div>
                        <div class="items-content">
                            <h4 style='line-height: 16px;'class="items-title">
                                <a href="{{ route('sinhvien.detail.detail_raovat',$arrRaoVat) }}"> {{ $valuesRaovat->title_raovat }} &nbsp &nbsp  <a href='{{ route('sinhvien.detail.detail_raovat',$arrRaoVat) }}' class="button">{{ $valuesRaovat->name_choose }}</a>
                                </a>
                            </h4>
                            <p class="items-desc">
                                 {!! $valuesRaovat->detail_raovat !!} 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
      <div align="right">
        {{ $objNewsRaoVat->links() }}
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