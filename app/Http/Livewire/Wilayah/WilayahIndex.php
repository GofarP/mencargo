<?php

namespace App\Http\Livewire\Wilayah;

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


        $data_wilayah = Wilayah::with('tingkatwilayah')
            ->whereHas('tingkatwilayah', function ($query)  {
                $query->where('nama', 'like', '%' . $this->search . '%');
            })
            ->orWhere('nama', 'like', '%' . $this->search . '%')
            ->paginate(10)
            ->onEachSide(1);

        if ($data_wilayah->count() <= 10) {
            $this->resetPage();
        }

        return view('livewire.wilayah.wilayah-index', ['data_wilayah' => $data_wilayah]);
    }
}
