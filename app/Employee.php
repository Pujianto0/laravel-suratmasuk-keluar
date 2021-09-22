<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Employee extends Model
{
   protected $guarded =[]; 
   protected $dates = ['created_at'];
   protected $primaryKey = 'id';
   public function data()
    {
        return $this->belongsTo(Employee::class);
    }
     public function row()
    {
        return $this->belongsTo(Employee::class);
        
    }
 
}
