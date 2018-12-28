<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raovat extends Model
{
    protected $table = "tb_raovat";
    protected $primaryKey = 'id_raovat';
	public $timestamps = false;
}
