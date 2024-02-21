<?php

namespace App\Livewire\Pagos;

use App\Models\ImporteDueno;
use App\Models\Ticket;
use App\Models\Venta;
use Livewire\Component;
use Livewire\Attributes\On;
use Carbon\Carbon;

class NuevoPagoForm extends Component
{
    public $ventas;
    public $numero_contrato;
    public $contrato;
    public $contrato_venta;
    public $monto_maximo;
    public $monto;
    public $metodo = 'selecciona';

    public function render()
    {
        $query = Venta::query();
    
        if ($this->numero_contrato != null && $this->numero_contrato != 0) {
            $query->where('id', 'LIKE', '%' . $this->numero_contrato . '%');
            $this->ventas = $query->get();
        } else {
            if ($this->contrato_venta == null){
                $this->contrato = 'selecciona';
                $this->ventas = $query->get();
            }
        }
    
        return view('livewire.pagos.nuevo-pago-form');
    }
    
    public function actualizar_filtro(){
        $this->render();
    }

    public function actualizar_contrato(){
        $this->contrato_venta = Venta::find($this->contrato);

        $this->setMonto();
    }

    public function actualizar_monto(){
        if ($this->monto > $this->monto_maximo){
            $this->monto = $this->monto_maximo;
        }
    }

    public function setMonto(){
        $tickets = Ticket::where('venta_id', $this->contrato_venta->id)->get();
        $monto_tickets = 0;
        foreach ($tickets as $ticket){
            $monto_tickets += $ticket->cantidad_abonar;
        }
        $pagos = ImporteDueno::where('venta', $this->contrato_venta->id)->get();
        $monto_pagos = 0;
        if ($pagos) {
            foreach ($pagos as $pago){
                $monto_pagos += $pago->monto;
            }
        }

        $this->monto_maximo = floatval($monto_tickets - $monto_pagos);
    }

    public function submit(){
        $this->advertencia_pago();
    }
    public function cancelar(){
        return redirect(route('pagos'));
    }
    
    public function advertencia_pago(){
        $this->dispatch('advertencia_pago');
    }
    
    #[On('aceptar_pago')]
    public function aceptar_pago(){
        if ($this->monto == 0){        
            $this->dispatch('error_monto');
            return;
        } else if ($this->metodo == 'selecciona') {
            $this->dispatch('error_metodo');
            return;
        } else {
            $pago = ImporteDueno::where('venta', $this->contrato_venta->id)->orderBy('id', 'DESC')->first();

            $importe_pago_a_dueno = new ImporteDueno();
            
            if ($pago){
                $importe_pago_a_dueno->numero = $pago->numero + 1;
            } else {
                $importe_pago_a_dueno->numero = 1;                
            }
            
            $importe_pago_a_dueno->monto = $this->monto;
            $importe_pago_a_dueno->fecha = Carbon::now()->toDateString();
            $importe_pago_a_dueno->venta = $this->contrato_venta->id;
            $importe_pago_a_dueno->metodo = $this->metodo;
            $importe_pago_a_dueno->save();
            
            $this->dispatch('pago_realizado');
        }
    }

    #[On('realizado')]
    public function realizado(){
        return redirect(route('pagos'));
    }
}
