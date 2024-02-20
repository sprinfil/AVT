<?php

namespace App\Livewire\Pagos;

use App\Models\Venta;
use Livewire\Component;

class NuevoPagoForm extends Component
{
    public $ventas;
    public $numero_contrato;

    public function render()
    {
        $query = Venta::All();
        $this->ventas = $query;

        return view('livewire.pagos.nuevo-pago-form');
    }

    public function actualizar_filtro(){
        $this->render();
    }
}
