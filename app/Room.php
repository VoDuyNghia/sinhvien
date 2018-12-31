<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "tb_room";
    protected $primaryKey = 'id_room';
	public $timestamps = false;


    public function addRoom($request){
    	// $date = date('Y-m-d H:i:s');

     //    $this->title_room 	    = $request->title;
     //    $this->content_room  	= $request->content;
     //    $this->view_room 		= 0;
     //    $this->id_member 		= session('id_member');
     //    $this->img_total        = count($request->file('file_img'));
     //    $this->img_room 	    = 0;
     //    $this->active_room 	    = 1;
     //    $this->date_room        = $date;
     //    $this->address_room     = $request->address_room;
        
     //    $this->price_room       = $request->price;
     //    $this->gender_room 	    = $request->gender;

     //    $this->contact_username = $request->name;
     //    $this->contact_hotline  = $request->phone;
     //    $this->contact_email    = $request->email;
     //    $this->contact_address  = $request->address_user;
        
     //    return $this->save();
    }
}
