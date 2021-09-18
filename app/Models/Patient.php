<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    
    //relacion uno a muchos 
    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}
