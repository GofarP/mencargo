<?php

namespace App\Http\Livewire\PesananMenCargo;

use App\Models\Wilayah;
use Livewire\Component;
use App\Models\Customer;
use App\Models\MetodePembayaran;
use App\Models\StatusPembayaran;

class PesananMenCargoEdit extends Component
{

    public $search;
    public $data_customer, $data_metode_pembayaran, $data_status_pembayaran, $data_wilayah;
    public $data_pesanan;
    public $componentId;


    public function mount($pesananmencargo)
    {
        $this->data_customer = Customer::get();
        $this->data_metode_pembayaran=MetodePembayaran::get();
        $this->data_status_pembayaran = StatusPembayaran::get();
        $this->data_wilayah=Wilayah::get();
        $this->data_pesanan=$pesananmencargo;

    }

    public function render()
    {
        return view('livewire.pesanan-men-cargo.pesanan-men-cargo-edit');
    }
}
