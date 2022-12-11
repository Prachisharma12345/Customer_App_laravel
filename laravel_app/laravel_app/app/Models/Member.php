<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey="member_id";
    //for one to one relationship
    // public function group(){
    //     return $this->hasOne('App\Models\Group','group_id');
    // }
    //for one to many relationships
    public function group(){
        return $this->hasMany('App\Models\Group','group_id','group_id');//first group_id is primary key of members table and 2nd local key of group table
    }
}
