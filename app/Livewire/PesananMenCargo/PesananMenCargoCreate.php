<?php

namespace App\Livewire\PesananMenCargo;

use App\Models\Wilayah;
use Livewire\Component;
use App\Models\Customer;
use App\Models\MetodePembayaran;
use App\Models\StatusPembayaran;

class PesananMenCargoCreate extends Component
{
    public $search;
    public $data_customer, $data_metode_pembayaran, $data_status_pembayaran, $data_wilayah;
    public $componentId;


    public function mount(){
        $this->data_customer = Customer::get();
        $this->data_metode_pembayaran=MetodePembayaran::get();
        $this->data_status_pembayaran = StatusPembayaran::get();
        $this->data_wilayah=Wilayah::get();

    }

    public function render()
    {
        $this->dispatch('pharaonic.select2.init');

        return view('livewire.pesanan-men-cargo.pesanan-men-cargo-create',[
            'data_customer'=>$this->data_customer,
            'data_metode_pembayaran'=>$this->data_metode_pembayaran,
            'data_status_pembayaran'=>$this->data_status_pembayaran,
            'data_wilayah'=>$this->data_wilayah,
        ]);
    }
}
