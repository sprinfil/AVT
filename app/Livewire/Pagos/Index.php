<?php

namespace App\Livewire\Pagos;

use App\Models\ImporteDueno;
use Livewire\Component;

class Index extends Component
{
    public $pagos;

    public function mount(){
        $pagos = ImporteDueno::all();
    }

    public function render()
    {
        return view('livewire.pagos.index');
    }
}
