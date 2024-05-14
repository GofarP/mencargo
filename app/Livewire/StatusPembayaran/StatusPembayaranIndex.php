<?php

namespace App\Livewire\StatusPembayaran;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StatusPembayaran;

class StatusPembayaranIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $data_status_pembayaran=StatusPembayaran::where('nama', 'like', '%' . $this->search . '%')
        ->paginate(10)
        ->onEachSide(1);

        return view('livewire.status-pembayaran.status-pembayaran-index',[
            'data_status_pembayaran'=>$data_status_pembayaran
        ]);

    }
}
