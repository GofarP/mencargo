<?php

namespace App\Livewire\Vendor;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class VendorIndex extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $data_vendor=Vendor::with('wilayah')
        ->where('nama','like','%'.$this->search.'%')
        ->orWhere('penanggung_jawab','like','%'.$this->search.'%')
        ->orWhere('bank','like','%'.$this->search.'%')
        ->orWhere('no_rekening','like','%'.$this->search.'%')
        ->orWhere('no_telp','like','%'.$this->search.'%')
        ->orWhere('alamat','like','%'.$this->search.'%')
        ->orWhere('harga','like','%'.$this->search.'%')
        ->orWhereHas('wilayah',function($query){
            $query->where('nama', 'like', '%'.$this->search.'%');
        })
        ->paginate(10)
        ->onEachSide(1);

        return view('livewire.vendor.vendor-index',['data_vendor'=>$data_vendor]);
    }
}
