<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function member(){
        return $this->hasMany('App\Models\Member','group_id','group_id');//first group_id is primary key of members table and 2nd local key of group table
    }
}
