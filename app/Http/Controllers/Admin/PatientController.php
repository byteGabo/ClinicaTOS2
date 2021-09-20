<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use PDF;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.patients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
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
            'name_patient'=> 'required',
            'dpi'=> 'required',
            'gender'=> 'required',
            'day_of_birth'=> 'required',
            'email'=> 'required|unique:doctors',
            'address'=> 'required',
            'phone'=> 'required',
            'sick'=> 'required',
            'medicaments'=> 'required',
            'alergy'=> 'required',
            'is_active'=> 'required',
        ]);
        $patient= Patient::create($request->all());

        return redirect()->route('admin.patients.index',$patient)->with('info','El paciente se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //se pasa los datos del id del paciente a la vista editar paciente 
       return view('admin.patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {

        //se validan todos los datos antes de modificarlos para no dejar ni una casilla vacia 
        $request->validate([
            'name_patient'=> 'required',
            'dpi'=> 'required',
            'gender'=> 'required',
            'day_of_birth'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'sick'=> 'required',
            'medicaments'=> 'required',
            'alergy'=> 'required',
            'is_active'=> 'required'        
        ]);

        $patient -> update($request->all());

        return redirect()->route('admin.patients.index', $patient)->with('info','El paciente se modificó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //se elimina el paciente definitivamente y se redirecciona a la lista de pacientes 
        $patient -> delete();
        return redirect()->route('admin.patients.index')->with('info','El paciente se eliminó con exito');
    }

    public function crearPDF(){
        $patients = Patient::where('is_active',1)
                             ->select('patients.*')
                             ->orderBy('id','DESC')
                             ->get();

        $pdf = PDF::loadView('admin.patients.pdf', compact('patients'));
        return $pdf->download('patients-list.pdf');
    }
}
