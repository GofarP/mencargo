<?php

namespace App\Http\Livewire\PesananMenCargo;

use Livewire\Component;
use App\Models\PesananMenCargo;

class PesananMenCargoIndex extends Component
{

    public $search;

    public function render()
    {


        $data_pesanan_mencargo=PesananMenCargo::with('daerahasal','daerahtujuan','customer','statuspembayaran')
        ->orWhereHas('daerahasal',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })
        ->orWhereHas('daerahtujuan',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })
        ->orWhereHas('customer',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })
        ->orWhereHas('statuspembayaran',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })
        ->orWhere('stt','like','%'.$this->search.'%')
        ->orWhere('total_biaya', 'like', '%' . $this->search . '%')
        ->orWhere('resi', 'like', '%' . $this->search . '%')
        ->paginate(10)
        ->onEachSide(1);

        return view('livewire.pesanan-men-cargo.pesanan-men-cargo-index', [
            'data_pesanan_mencargo' => $data_pesanan_mencargo
        ]);
    }
}
