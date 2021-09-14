<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor;
use Livewire\WithPagination;

class DoctorsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $doctors = Doctor::select('id','name','day_of_birth','email','address', 'phone')
                                 ->where('name', 'LIKE', '%' .  $this->search . '%')      
                                 ->orderBy('id','DESC')
                                 ->paginate();

        return view('livewire.admin.doctors-index',compact('doctors'));
    }
}
