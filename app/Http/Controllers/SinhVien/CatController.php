<?php

namespace App\Http\Controllers\SinhVien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Category;
use App\Raovat;
use App\Choose;
use App\Room;

class CatController extends Controller
{
    public function index($name ,$id){
    	$objCat = Category::find($id);

        $objNewsRaoVat = Raovat::select('tb_raovat.*','tb_choose.*')->join('tb_choose','tb_choose.id_choose','=','tb_raovat.id_choose')->where('id_category', '=', $id)->orderBy('id_raovat', 'DESC')->paginate(5);
    	return view('sinhvien.cat.raovat',compact('objCat','objNewsRaoVat'));
    }

    public function indexRoom($name ,$id){
    	$objCat = Category::find($id);
    	
        $objNewsRoom = Room::select('tb_room.*')->where('active_room', '=', 1)->orderBy('id_room', 'DESC')->paginate(5);
    	return view('sinhvien.cat.room',compact('objCat','objNewsRoom'));
    }


}
