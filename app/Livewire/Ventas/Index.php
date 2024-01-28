<?php

namespace App\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $ventas = Venta::All();
        return view('livewire.ventas.index', compact('ventas'));
    }
}
