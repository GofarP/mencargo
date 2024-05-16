<?php

namespace App\Http\Livewire\TingkatanWilayah;

use App\Models\TingkatanWilayah;
use Livewire\Component;
use Livewire\WithPagination;

class TingkatanWilayahIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $data_tingkatan_wilayah=TingkatanWilayah::where('nama', 'like', '%' . $this->search . '%')
        ->paginate(10)
        ->onEachSide(1);

        if(count($data_tingkatan_wilayah) <=10){
            $this->resetPage();
        }

        return view('livewire.tingkatan-wilayah.tingkatan-wilayah-index',['data_tingkatan_wilayah'=>$data_tingkatan_wilayah]);
    }
}
