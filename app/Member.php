<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Member extends Model
{
    protected $table = "tb_member";
    protected $primaryKey = 'id_member';
	public $timestamps = false;

  	public function getItem($id){
    	return $objItem = $this->findOrFail($id);
    }

	public function addMember($request) {
		$this->user_member 		= $request->username;
		$this->password_member 	= $request->password ;
		$this->active_member 	= 1;
		$this->date_member 		= $request->birthday;
		$this->gender_member	= $request->gender;
		$this->hotline_member 	= $request->phone;
		$this->address_member 	= $request->address;
		$this->fullname_member 	= $request->name;

	 	return $this->save();
	}
}
