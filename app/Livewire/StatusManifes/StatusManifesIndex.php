<?php

namespace App\Livewire\StatusManifes;

use App\Models\StatusManifes;
use Livewire\Component;
use Livewire\WithPagination;

class StatusManifesIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data_status_manifes=StatusManifes::where('nama','like','%'.$this->search.'%')
        ->orWhere('keterangan','like','%'.$this->search.'%')
        ->paginate(10)
        ->onEachSide(1);

        return view('livewire.status-manifes.status-manifes-index',[
            'data_status_manifes' => $data_status_manifes
        ]);

    }
}
