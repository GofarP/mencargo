<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;


class CustomerIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        // $data_customer=Customer::with(['wilayah' => function($query) {
        //     $query->where('nama', 'like', '%' . $this->search . '%');
        // }])
        // ->where('nama', 'like', '%'. $this->search. '%')
        // ->orWhere('no_telp','like', '%'. $this->search. '%')
        // ->paginate(10)
        // ->onEachSide(1);

        $data_customer=Customer::with('wilayah')
        ->whereHas('wilayah',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })
        ->orwhere('nama', 'like', '%'. $this->search. '%')
        ->orWhere('no_telp','like', '%'. $this->search. '%')
        ->paginate(10)
        ->onEachSide(1);

        return view('livewire.customer.customer-index',['data_customer'=>$data_customer]);
    }
}
