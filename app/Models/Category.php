<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['name_category'];
    //relacion uno a muchos 
    public function doctor(){
        return $this->hasMany(Doctor::class,'category_id');
    }
}
