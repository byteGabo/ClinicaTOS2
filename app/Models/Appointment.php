<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

     //relacion uno a muchos inversa con Usuarios
     public function user(){
        return $this->belongsTo(User::class);
    }
     //relacion uno a muchos inversa con doctores
     public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
     //relacion uno a muchos inversa con pacientes
     public function patient(){
        return $this->belongsTo(Patient::class);
    }
     //relacion uno a muchos inversa con status
     public function status(){
        return $this->belongsTo(Status::class);
    }
    
}
