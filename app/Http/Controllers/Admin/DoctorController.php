<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;
use PDF;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.doctors.index')->only('index');
        $this->middleware('can:admin.doctors.create')->only('create','store');
        $this->middleware('can:admin.doctors.edit')->only('edit','update');
        $this->middleware('can:admin.doctors.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.doctors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name_category','id');
       
        return view('admin.doctors.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_doctor'=> 'required',
            'gender'=> 'required',
            'day_of_birth'=> 'required',
            'email'=> 'required|unique:doctors',
            'address'=> 'required',
            'phone'=> 'required',
            'is_active'=> 'required',
            'category_id'=> 'required'
        ]);

        $doctor = Doctor::create($request->all());

        return redirect()->route('admin.doctors.index', $doctor)->with('info','El doctor se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $categories = Category::pluck('name_category','id');
        return view('admin.doctors.edit',compact('doctor','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name_doctor'=> 'required',
            'gender'=> 'required',
            'day_of_birth'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'is_active'=> 'required',
            'category_id'=> 'required'
        ]);

       
        $doctor -> update($request->all());
    

        return redirect()->route('admin.doctors.index', $doctor)->with('info','El doctor se modificó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor -> delete();
        return redirect()->route('admin.doctors.index')->with('info','El doctor se eliminó con exito');
    }

    public function crearPDF(){

        $doctors = Doctor::join('categories','categories.id', '=', 'doctors.category_id')
                                    ->where('is_active',1)
                                    ->select(['doctors.*','categories.name_category'])
                                    ->orderBy('id','DESC')
                                    ->get();
                                    

       /*  $doctors= Doctor::where('is_active',1)
                        ->get(); */

        $pdf = PDF::loadView('admin.doctors.pdf',compact('doctors'));
        return $pdf->download('doctors-list.pdf');
    }
}
