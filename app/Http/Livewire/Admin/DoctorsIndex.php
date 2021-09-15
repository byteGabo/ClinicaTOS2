<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
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
       
        /*  $doctors = Doctor::select('id','name','day_of_birth','email','address', 'phone','is_active','category_id')
                                 ->where('name', 'LIKE', '%' .  $this->search . '%')      
                                 ->orderBy('id','DESC')
                                 ->paginate(); */
                       
        $doctors = Doctor::join('categories','categories.id', '=', 'doctors.category_id')
                                    ->select(['doctors.*','categories.name_category'])
                                    ->where('name', 'LIKE', '%' .  $this->search . '%')  
                                    ->orderBy('id','DESC')
                                    ->paginate();
 
        return view('livewire.admin.doctors-index',compact('doctors')); 
    }
}
