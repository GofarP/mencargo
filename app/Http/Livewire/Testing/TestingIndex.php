<?php

namespace App\Http\Livewire\Testing;

use Livewire\Component;

class TestingIndex extends Component
{
    public function render()
    {
        $this->dispatchBrowserEvent('pharaonic.select2.init');

        return view('livewire.testing.testing-index');
    }
}
