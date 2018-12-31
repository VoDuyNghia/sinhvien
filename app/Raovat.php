<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raovat extends Model
{
    protected $table = "tb_raovat";
    protected $primaryKey = 'id_raovat';
	public $timestamps = false;


    public function addRaoVat($request){
    	$date = date('Y-m-d H:i:s');

        $this->title_raovat 	= $request->title_raovat;
        $this->content_raovat  	= $request->content;
        $this->view_raovat 		= 0;
        $this->id_category 		= $request->category;
        $this->id_member 		= session('id_member');
        $this->image_raovat 	= $request->fileName;
        $this->active_raovat 	= 1;
        $this->id_choose 		= $request->choose;
        $this->date_raovat 		= $date;
        $this->detail_raovat 	= $request->chitiet;
        $this->hotline_raovat 	= $request->hotline;
        $this->facebook_raovat 	= $request->facebook;
        $this->username_raovat 	= $request->username;
        
        return $this->save();
    }
}
