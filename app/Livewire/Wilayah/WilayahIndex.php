<?php

namespace App\Livewire\Wilayah;

use App\Models\Wilayah;
use Livewire\Component;
use Livewire\WithPagination;


class WilayahIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data_wilayah = Wilayah::with(['tingkatwilayah' => function($query) {
            $query->where('nama', 'like', '%' . $this->search . '%');
        }])
        ->where('nama', 'like', '%' . $this->search . '%')
        ->paginate(10)
        ->onEachSide(1);

        if(count($data_wilayah) <=10){
            $this->resetPage();
        }

        return view('livewire.wilayah.wilayah-index',['data_wilayah' => $data_wilayah]);
    }
}
