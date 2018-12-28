<?php

namespace App\Http\Controllers\SinhVien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Category;
use App\Raovat;
use App\Choose;

class CatController extends Controller
{
    public function index($name ,$id){
    	$objCat = Category::find($id);
    	// $objNewsRaoVat = Raovat::where('id_category', '=', $id)->orderBy('id_raovat', 'DESC')->get();
        $objNewsRaoVat = Raovat::select('tb_raovat.*','tb_choose.*')->join('tb_choose','tb_choose.id_choose','=','tb_raovat.id_choose')->where('id_category', '=', $id)->orderBy('id_raovat', 'DESC')->paginate(6);
    	return view('sinhvien.cat.raovat',compact('objCat','objNewsRaoVat'));
    }



}
