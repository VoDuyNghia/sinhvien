<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "tb_category";
    protected $primaryKey = 'id_category';
	public $timestamps = false;
}
