<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee1 extends Model
{
    protected $guarded =[]; 
    protected $primaryKey = 'id';
   public function data()
    {
        return $this->belongsTo(Employee1::class);
    }
     public function row()
    {
        return $this->belongsTo(Employee1::class);
        
    }
}
