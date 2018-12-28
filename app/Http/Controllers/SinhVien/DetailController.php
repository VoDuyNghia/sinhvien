<?php

namespace App\Http\Controllers\SinhVien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Category;
use App\Raovat;
use App\Choose;

class DetailController extends Controller
{
    public function index_raovat($name1,$name, $id){
    	$objNewsRaoVat = Raovat::select('tb_raovat.*','tb_choose.*','tb_category.*')->join('tb_choose','tb_choose.id_choose','=','tb_raovat.id_choose')->join('tb_category','tb_category.id_category','=','tb_raovat.id_category')->where('id_raovat', '=', $id)->orderBy('id_raovat', 'DESC')->first();


    	$objNewsTinLienQuan = Raovat::select('tb_raovat.*','tb_choose.*','tb_category.*')->join('tb_choose','tb_choose.id_choose','=','tb_raovat.id_choose')->join('tb_category','tb_category.id_category','=','tb_raovat.id_category')->where('tb_raovat.id_category', '=', $objNewsRaoVat->id_category)->orderBy('id_raovat', 'DESC')->take(5)->get();
    	return view('sinhvien.detail.detail_raovat',compact('objNewsRaoVat','objNewsTinLienQuan'));
    }
}
