<?php

namespace App\Livewire\Pagos;

use App\Models\ImporteDueno;
use App\Models\Ticket;
use App\Models\Venta;
use App\Models\Zona;
use Livewire\Component;
use Livewire\Attributes\On;
use Carbon\Carbon;
use COM;

class NuevoPagoForm extends Component
{
    public $zonas;
    public $nombre_zona;
    public $zona;
    public $zona_seleccionada;
    public $contrato_venta;
    public $metodo = 'selecciona';

    public $desde;
    public $hasta;

    public function render()
    {
        $query = Zona::query();
    
        if ($this->nombre_zona != null && $this->nombre_zona != '') {
            $query->where('nombre', 'LIKE', '%' . $this->nombre_zona . '%');
            $this->zonas = $query->get();
        } else {
            if ($this->zona_seleccionada == null){
                $this->zona = 'selecciona';
                $this->zonas = $query->get();
            }
        }
    
        return view('livewire.pagos.nuevo-pago-form');
    }
    
    public function actualizar_filtro(){
        $this->render();
    }

    public function actualizar_zona(){
        $this->zona_seleccionada = Zona::find($this->zona);
    }

    public function setMonto($id){
        $tickets = Ticket::where('venta_id', $id)->where('fecha', '>=', $this->desde)->where('fecha', '<=', $this->hasta)->get();
        $monto_tickets = 0;
        foreach ($tickets as $ticket){
            $monto_tickets += $ticket->cantidad_abonar;
        }
        $pagos = ImporteDueno::where('venta', $id)->get();
        $monto_pagos = 0;
        if ($pagos) {
            foreach ($pagos as $pago){
                $monto_pagos += $pago->monto;
            }
        }

        return $monto_tickets - $monto_pagos;
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
        if ($this->metodo == 'selecciona') {
            $this->dispatch('error_metodo');
            return;
        } else if ($this->desde == null || $this->hasta == null) {
            $this->dispatch('error_periodo');
            return;
        } else {
            $ventaIds = Venta::where('zona_id', $this->zona_seleccionada->id)
                            ->orderBy('id', 'DESC')
                            ->pluck('id');

            $pagos_a_duenos = ImporteDueno::all()->pluck('ticket_id');
            
            $tickets = Ticket::whereIn('venta_id', $ventaIds)->whereNotIn('id', $pagos_a_duenos)->get();

            if (count($tickets) > 0){
                foreach($tickets as $ticket){
                    $pago = ImporteDueno::where('venta', $ticket->venta_id)->orderBy('id', 'DESC')->first();
    
                    $importe_pago_a_dueno = new ImporteDueno();
                    
                    if ($pago){
                        $importe_pago_a_dueno->numero = $pago->numero + 1;
                    } else {
                        $importe_pago_a_dueno->numero = 1;                
                    }
                    
                    $importe_pago_a_dueno->monto = $ticket->cantidad_abonar;
                    $importe_pago_a_dueno->fecha = Carbon::now()->toDateString();
                    $importe_pago_a_dueno->venta = $ticket->venta_id;
                    $importe_pago_a_dueno->metodo = $this->metodo;
                    $importe_pago_a_dueno->periodo = $this->desde . ' - ' . $this->hasta;
                    $importe_pago_a_dueno->ticket_id = $ticket->id;
                                    
                    $importe_pago_a_dueno->save();
                }
                
                $this->dispatch('pago_realizado');
            } else {
                $this->dispatch('no_tickets');
                return;
            }
        }
    }

    #[On('realizado')]
    public function realizado(){
        return redirect(route('pagos'));
    }
}
