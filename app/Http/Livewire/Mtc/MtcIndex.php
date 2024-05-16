<?php

namespace App\Http\Livewire\Mtc;

use App\Models\MTC;
use Livewire\Component;
use Livewire\WithPagination;

class MtcIndex extends Component
{

    use WithPagination;

    public $search;


    public function render()
    {

        $data_mtc = MTC::with('vendor', 'pesananmencargo', 'statusmanifes')
            ->whereHas('vendor', function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('statusmanifes', function ($query) {
                $query->where(function ($query) {
                    $query->where('nama', 'like', '%' . $this->search . '%')
                        ->orWhere('keterangan', 'like', '%' . $this->search . '%');
                });
            })
            ->orWhereHas('pesananmencargo', function ($query) {
                $query->where(function ($query) {
                    $query->where('stt', 'like', '%' . $this->search . '%')
                        ->orWhere('resi', 'like', '%' . $this->search . '%');
                });
            })
            ->paginate(10)
            ->onEachSide(1);


        return view('livewire.mtc.mtc-index', [
            'data_mtc' => $data_mtc
        ]);
    }
}
