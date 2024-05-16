<?php

namespace App\Http\Livewire\PesananMenCargo;

use App\Models\Wilayah;
use Livewire\Component;
use App\Models\Customer;
use App\Models\MetodePembayaran;
use App\Models\StatusPembayaran;

class PesananMenCargoCreate extends Component
{
    public $search;
    public $data_customer, $data_metode_pembayaran, $data_status_pembayaran, $data_wilayah;
    public $customer_id,$metode_pembayaran_id;
    public $daerah_asal,$berat=0,$unit=0,$harga_barang=0,$harga_unit=0,$harga_diskon=0,$biaya_tambahan=0,$total_biaya=0;
    public $uang_muka=0,$uang_sisa=0;
    public $biaya_barang=5000, $biaya_unit=100000;


    public function mount(){
        $this->data_customer = Customer::get();
        $this->data_metode_pembayaran=MetodePembayaran::get();
        $this->data_status_pembayaran = StatusPembayaran::get();
        $this->data_wilayah=Wilayah::get();
    }

    public function render()
    {
        $this->dispatchBrowserEvent('pharaonic.select2.init');

        return view('livewire.pesanan-men-cargo.pesanan-men-cargo-create',[
            'data_customer'=>$this->data_customer,
            'data_metode_pembayaran'=>$this->data_metode_pembayaran,
            'data_status_pembayaran'=>$this->data_status_pembayaran,
            'data_wilayah'=>$this->data_wilayah,
        ]);
    }

    public function hitungTotal()
    {
        $this->total_biaya=($this->berat * $this->biaya_barang) + ($this->unit * $this->biaya_unit) +$this->biaya_tambahan -$this->harga_diskon;
    }
}
