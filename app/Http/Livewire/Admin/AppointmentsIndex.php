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
        $appointments = Appointment::where('user_id', auth()->user()->id)
                                    ->where('title','LIKE', '%' . $this->search . '%')
                                    ->latest('id')
                                    ->paginate();
      
        return view('livewire.admin.appointments-index', compact('appointments'));
    }
}
