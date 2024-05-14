<?php

namespace App\Livewire\PesananMenCargo;

use Livewire\Component;
use App\Models\Customer;

class PesananMenCargoCreate extends Component
{
    public $search;
    public $data_customer;
    public $componentId;

    public function mount(){
        $this->data_customer = Customer::get();
        $this->componentId = uniqid();

    }

    public function render()
    {
        $this->dispatch('pharaonic.select2.init');

        return view('livewire.pesanan-men-cargo.pesanan-men-cargo-create',[
            'customer'=>$this->data_customer,
            'componentId'=>$this->componentId
        ]);
    }
}
