<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "tb_job";
    protected $primaryKey = 'id_job';
	public $timestamps = false;

}
