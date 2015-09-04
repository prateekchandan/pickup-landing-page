<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
	protected $hidden = array('group_id','created_at','updated_at');
}
