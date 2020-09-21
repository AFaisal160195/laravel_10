<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //whitelist
    protected $fillable=['name','alamat','phone','email','position_id','picture'];

    //blacklist
    protected $guarded=['id'];

    public function position(){
        return $this->belongsTo('App\Position');
    }

    public function inventory(){
        return $this->belongsToMany('App\Inventory')
        ->withPivot('description', 'created_at');
    }

}
