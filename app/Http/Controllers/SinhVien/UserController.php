<?php

namespace App\Http\Controllers\SinhVien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Category;
use App\Raovat;
use App\Choose;
use App\Total;
use App\Room;
use App\Job;
use App\TuyenDung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RoomRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\JobRequest;

class UserController extends Controller
{
	public function __construct(Member $objMember, Raovat $objNewsRaoVat, Total $objTotal, Room $objRoom){
		$this->objMember = $objMember;
        $this->objNewsRaoVat = $objNewsRaoVat;
        $this->objTotal = $objTotal;
        $this->objRoom = $objRoom;
	}

    public function index() {
        $objMember = Member::where('id_member', '=', session('id_member'))->first();
    	return view('sinhvien.user.index', compact('objMember'));
    }

    public function getAdd() {
    	return view('sinhvien.user.register');
    }

    public function postAdd(Request $request) {
		if($this->objMember->addMember($request)){
			$request->session()->flash('msg');
			return redirect()->route('sinhvien.index.index');
		}
    }

    public function postEdit(Request $request){
        $UpdateMember = Member::where('id_member', '=', session('id_member'))->update(['fullname_member' => $request->name,'address_member' => $request->address, 'date_member' => $request->birthday, 'gender_member' => $request->gender, 'hotline_member' => $request->phone  ] );

        
        if($UpdateMember == true){
            $request->session()->flash('msg_updateMember','Đã cập nhật thành công');
            return redirect()->route('sinhvien.user.index');
        } else {
            $request->session()->flash('msg_updateMember','Cập nhật thất bại');
            return redirect()->route('sinhvien.user.index');
        }
    }

    public function UpdateCode(Request $request){
        $UpdateCode = Member::where('code_member', '=', $request->code)->orwhere('email_member','=', $request->email)->update(['active_member' => 1]);

        if($UpdateCode == true){
            $request->session()->flash('msg_updateMember','Đã cập nhật thành công');
            return redirect()->route('sinhvien.user.index');
        } else {
            $request->session()->flash('msg_updateMember','Cập nhật thất bại');
            return redirect()->route('sinhvien.user.index');
        }
    }

    public function getRaoVat(){
        $objChoose = Choose::get();
        $objCategory = Category::where('parent_category', '<>', 0)->get();
        return view ('sinhvien.user.add_raovat', compact('objChoose','objCategory'));
    }

    public function postRaoVat(NewsRequest $request){
        $file = $request->file('userImage');

        if(!is_null($file)){
            // upload file lên
            if($request->hasFile('userImage')){
                $fileName = $this->userImage = $request->userImage->getClientOriginalName();// lấy tên hình ra
             
                $patch=  $request->file('userImage')->store('/public/files/files_raovat');

                $tmp= explode('/', $patch);
                $fileName = end($tmp);

                $request->fileName = $fileName;
            } else {
                $request->fileName = '';
            }
        } 

        if ($this->objNewsRaoVat->addRaoVat($request)){
            $request->session()->flash('msg_postRaovat','true');
            return redirect()->route('sinhvien.user.add_raovat');
        } else {
            $request->session()->flash('msg_postRaovat','false');
            return redirect()->route('sinhvien.user.index');
        }
    }


    public function getThuePhong(){

        return view('sinhvien.user.add_room');
    }

    public function postThuePhong(RoomRequest $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $fileDaiDien = $request->file('userImage');
        $file = $request->file('file_img');
        $date = date('Y-m-d H:i:s');
        if(!is_null($file)){
            $count = count($request->file('file_img'));
        } else {
            $count = 0;
        }

        if(!is_null($fileDaiDien)){
            // upload file lên
            if($request->hasFile('userImage')){
                $fileDaiDien = $this->userImage = $request->userImage->getClientOriginalName();// lấy tên hình ra
             
                $patch=  $request->file('userImage')->store('/public/files/files_room');

                $tmp= explode('/', $patch);
                $fileDaiDien = end($tmp);

                $request->fileName = $fileDaiDien;
            } else {
                $request->fileName = '';
            }
        } else {
            $request->fileName = '';
        }
        
        $addRoom = DB::table('tb_room')->insert([
            'title_room'            => $request->title_room,
            'content_room'          => $request->content,
            'view_room'             => 0,
            'id_member'             => session('id_member'),
            'img_total'             => $count,
            'img_room'              => $request->fileName,
            'active_room'           => 1,
            'date_room'             => $date,
            'address_room'          => $request->address_room.', '.$request->county.', Đà Nẵng',
            'price_room'            => $request->price,
            'gender_room'           => $request->gender,
            'contact_username'      => $request->contact_name,
            'contact_hotline'       => $request->phone,
            'contact_email'         => $request->email,
            'contact_address'       => $request->address_user,
            'id_category'           => 2,
            'county_room'           => $request->county,
        ]);

        if($addRoom == true) {
            $id =DB::getPdo()->lastInsertId();
            if(!is_null($file)){
                foreach ( $request->file( 'file_img' ) as $file ) {
                    $original_name = $file->getClientOriginalName();
                    $extension = $file->guessExtension();
                    $file_name = sha1($original_name)."-" .time().".".$extension;
                                        
                    $file->move(public_path('/files/files_room/'), $file_name);;
                    $cins = [
                        'name_totalroom'        => $file_name,
                        'id_room'               => $id,
                    ];
                    $resultCon= Total::insert($cins);
                }
            } else {    

                    $cins = [
                        'name_totalroom'        => 'khonghinh.png',
                        'id_room'               => $id,
                    ];
                    $resultCon= Total::insert($cins);
            }

            $request->session()->flash('msg_postPostRoom','true');
            return redirect()->route('sinhvien.user.add_room');
                
        } else {
            $request->session()->flash('msg_postPostRoom','false');
            return redirect()->route('sinhvien.user.index');
        }
    }

    public function getTuyenDung(){

        return view('sinhvien.user.add_tuyendung');
    }

    public function postTuyenDung(JobRequest $request){
        
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $fileDaiDien = $request->file('userImage');
        $date = date('Y-m-d H:i:s');

        if(!is_null($fileDaiDien)){
            // upload file lên
            if($request->hasFile('userImage')){
                $fileDaiDien = $this->userImage = $request->userImage->getClientOriginalName();// lấy tên hình ra
             
                $patch=  $request->file('userImage')->store('/public/files/files_tuyendung');

                $tmp= explode('/', $patch);
                $fileDaiDien = end($tmp);

                $request->fileName = $fileDaiDien;
            } else {
                $request->fileName = '';
            }
        } else {
            $request->fileName = '';
        }

        $addTuyenDung = DB::table('tb_tuyendung')->insert([
            'title_tuyendung'            => $request->title_tuyendung,
            'content_tuyendung'          => $request->content,
            'view_tuyendung'             => 0,
            'id_member'                  => session('id_member'),
            'active_tuyendung'           => 1,
            'date_tuyendung'             => $date,
            'img_tuyendung'              => $request->fileName,
            'hotline_tuyendung'          => $request->phone,
            'address_tuyendung'          => $request->address,
            'email_tuyendung'            => $request->email,
            'company_tuyendung'          => $request->company,
            'id_category'                => 3,
            'total_tuyendung'            => count(array_filter($request->job)),
        ]);
        
        if($addTuyenDung == true) {
            $id_tuyendung =DB::getPdo()->lastInsertId();
            foreach ($request->job as  $value) {
                if(!empty($value) || $value != NULL || $value != ""){ 
                        $Job = [
                            'name_job'                   => $value,
                            'id_tuyendung'               => $id_tuyendung,
                        ];
                        $resultCon= Job::insert($Job);
                }
            }
        }
    }
}
