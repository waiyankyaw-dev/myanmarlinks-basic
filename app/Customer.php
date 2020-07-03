<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //protected table
    //protected primaryKey
    //Accessor & Mutator

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
    
    public function setFirstNameAttribute($value){
        $this->attributes['first_name']=strtoupper($value);
    }
    protected $fillable = ["first_name","last_name","city","country","phone"];
    protected $hidden = ['created_at','updated_at'];
}
