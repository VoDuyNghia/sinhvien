<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Choose extends Model
{
    protected $table = "tb_choose";
    protected $primaryKey = 'id_choose';
	public $timestamps = false;
}
