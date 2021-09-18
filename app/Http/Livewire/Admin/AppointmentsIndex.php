<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;

class AppointmentsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $appointments = Appointment::join('doctors', 'doctors.id','=','appointments.doctor_id')
                                    ->join('patients','patients.id','=','appointments.patient_id')
                                    ->join('statuses','statuses.id','=','appointments.status_id')
                                    ->join('users','users.id','=','appointments.user_id')
                                    ->select(['appointments.*','doctors.name_doctor','patients.name_patient','statuses.name_status','users.name'])
                                    ->where('patients.name_patient','LIKE', '%' . $this->search . '%')
                                    ->latest('id')
                                    ->paginate();
      
        return view('livewire.admin.appointments-index', compact('appointments'));
    }
}
