<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Status;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.appointments.index')->only('index');
        $this->middleware('can:admin.appointments.create')->only('create','store');
        $this->middleware('can:admin.appointments.edit')->only('edit','update');
        $this->middleware('can:admin.appointments.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.appointments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::pluck('name_doctor','id');
                            
        $patients = Patient::pluck('name_patient','id');
                                
        $statuses = Status::pluck('name_status','id');
        
        return view('admin.appointments.create', compact('doctors','patients','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $appointment = Appointment::create($request->all());
    
        
    /*     return $request; */
        
        return redirect()->route('admin.appointments.index', $appointment)->with('info','La cita se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $doctors = Doctor::pluck('name_doctor','id');
                            
        $patients = Patient::pluck('name_patient','id');
                                
        $statuses = Status::pluck('name_status','id');
        return view('admin.appointments.edit', compact('appointment','doctors','patients','statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $appointment -> update($request->all());
    

        return redirect()->route('admin.appointments.index', $appointment)->with('info','La cita se modificó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('admin.appointments.index')->with('info','La cita se borró con exito');
    }
}
