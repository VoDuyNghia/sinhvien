<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $table = "tb_totalroom";
    protected $primaryKey = 'id_totalroom';
	public $timestamps = false;

}
