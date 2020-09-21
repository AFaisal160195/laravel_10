<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{

    //whitelist
    protected $fillable=['name','department_id'];

    //blacklist
    protected $guarded=['id'];

    use SoftDeletes;
    protected $dates=['deleted_at'];

    //created_at & update_id tidak terpakai
    //public $timestamps=false;

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function employee(){
        return $this->hasMany('App\Employee');
    }
}
