<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use Livewire\WithPagination;

class PatientsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $patients = Patient::select('patients.*')
                            ->where('name', 'LIKE', '%' .  $this->search . '%')
                            ->latest('id')
                            ->paginate();

        return view('livewire.admin.patients-index',compact('patients'));
    }
}
