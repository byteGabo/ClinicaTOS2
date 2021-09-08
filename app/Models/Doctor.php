<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa 
    public function category(){
        return $this->belongsTo(Category::class);
    }


     //relacion uno a muchos 
     public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}
