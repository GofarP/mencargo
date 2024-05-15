<?php

namespace App\Livewire\Mtc;

use App\Models\MTC;
use Livewire\Component;
use Livewire\WithPagination;

class MtcIndex extends Component
{
    public $search;

    public function render()
    {
        $search = $this->search;

        $data_mtc = MTC::with('vendor', 'pesananmencargo', 'statusmanifes')
            ->where(function ($query) use ($search) {
                $query->whereHas('vendor', function ($query) use ($search) {
                    $query->where('nama', 'like', '%' . $search . '%');
                })->orWhereHas('statusmanifes', function ($query) use ($search) {
                    $query->where(function ($query) use ($search) {
                        $query->where('nama', 'like', '%' . $search . '%')
                            ->orWhere('keterangan', 'like', '%' . $search . '%');
                    });
                })->orWhereHas('pesananmencargo', function ($query) use ($search) {
                    $query->where(function ($query) use ($search) {
                        $query->where('stt', 'like', '%' . $search . '%')
                            ->orWhere('resi', 'like', '%' . $search . '%');
                    });
                });
            })->paginate(10)
            ->onEachSide(1);

        return view('livewire.mtc.mtc-index', [
            'data_mtc' => $data_mtc
        ]);
    }
}
