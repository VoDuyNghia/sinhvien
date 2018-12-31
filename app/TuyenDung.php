<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyenDung extends Model
{
    protected $table = "tb_tuyendung";
    protected $primaryKey = 'id_tuyendung';
	public $timestamps = false;

}
