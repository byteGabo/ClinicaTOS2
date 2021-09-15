<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Category;

class DoctorController extends Controller
{
    public function index(){

        
        $doctors = Doctor::where('is_active', 1)->latest('id')->paginate(8);
     


        return view('doctors.index', compact('doctors'));

    }

    public function category(Category $category){
        
        $doctors = Doctor::where('category_id', $category->id)
                               ->where('is_active', 1)
                               ->latest('id')
                               ->paginate(6);
        return view('doctors.category',compact('doctors', 'category'));

    }
}
