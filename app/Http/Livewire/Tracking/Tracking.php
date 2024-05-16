<?php

namespace App\Http\Livewire\Tracking;

use App\Models\MTC;
use Livewire\Component;
use App\Models\PesananMenCargo;

class Tracking extends Component
{
    public $no_resi, $data_pesanan, $data_mtc;
    public $is_found=false,$is_searched=false;

    public function render()
    {

        return view('livewire.tracking.tracking');
    }

    public function cekResi(){
        $this->is_searched=true;
        $this->data_pesanan=PesananMenCargo::with('daerahasal','daerahtujuan','customer')
        ->where('resi',$this->no_resi)
        ->first();

        $this->data_mtc = MTC::with(['statusmanifes','pesananmencargo' => function ($query) {
            $query->where('resi', $this->no_resi);
        }])
        ->orderBy('created_at','DESC')
        ->get();

        if($this->data_pesanan){
            $this->is_found=true;
        }
    }

}
