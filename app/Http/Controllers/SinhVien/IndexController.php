<?php

namespace App\Http\Controllers\Sinhvien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('sinhvien.index.index');
    }
}
