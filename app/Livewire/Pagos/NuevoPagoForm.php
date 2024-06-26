<?php

namespace App\Livewire\Pagos;

use COM;
use Carbon\Carbon;
use App\Models\Zona;
use App\Models\Venta;
use App\Models\Ticket;
use App\Models\Importe;
use Livewire\Component;
use App\Models\PagoDueno;
use Livewire\Attributes\On;
use App\Models\ImporteDueno;

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
            $query->where('nombre', 'LIKE', '%' . $this->nombre_zona . '%')->whereNull('baja');
            $this->zonas = $query->get();
        } else {
            if ($this->zona_seleccionada == null){
                $this->zona = 'selecciona';
                $this->zonas = $query->whereNull('baja')->get();
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
            $desde = Carbon::createFromFormat('Y-m-d', $this->desde)->startOfDay();
            $hasta = Carbon::createFromFormat('Y-m-d', $this->hasta)->endOfDay();

            $desde_carbon = Carbon::createFromFormat('Y-m-d', $this->desde);
            $hasta_carbon = Carbon::createFromFormat('Y-m-d', $this->hasta);

            $validacion = PagoDueno::where('periodo_final','>=',$desde)->where('zona_id', $this->zona_seleccionada->id)->get();
            if(count($validacion) == 0){
                $ventaIds = Venta::where('zona_id', $this->zona_seleccionada->id)
                ->orderBy('id', 'DESC')
                ->pluck('id');
                $tickets = Ticket::whereIn('venta_id', $ventaIds)
                ->where('fecha','>=',$desde)->where('fecha','<=',$hasta)
                ->get();
                $anticipos = Importe::whereIn('venta', $ventaIds)->where('numero',0)
                ->where('fecha_liquidacion','>=',$desde)->where('fecha_liquidacion','<=',$hasta)
                ->get();


                if (count($tickets) > 0 || count($anticipos) > 0){
                    $monto = 0;
                    foreach($tickets as $ticket){
                        $monto += $ticket->cantidad_abonar;
                    }

                    $pago_dueno = new PagoDueno();
                    $pago_dueno->periodo_inicio = $desde;
                    $pago_dueno->periodo_final = $hasta;
                    $pago_dueno->monto = $monto;
                    $pago_dueno->metodo_pago = $this->metodo;
                    $pago_dueno->zona_id = $this->zona_seleccionada->id;
                    $pago_dueno->save();

                    $nombre_archivo = $pago_dueno->zona->nombre . "_INGRESOS_" . $desde_carbon->format('d-m-Y') . "_" . $hasta_carbon->format('d-m-Y');
                    $nombre_archivo_2 = $pago_dueno->zona->nombre . "_TICKETS_" . $desde_carbon->format('d-m-Y') . "_" . $hasta_carbon->format('d-m-Y');

                    /*
                                        $this->dispatch('pago_realizado', data: 
                    [
                        'pago_id' => $pago_dueno->id,
                        'nombre_archivo' => $nombre_archivo,
                        'nombre_archivo_2' => $nombre_archivo_2,
                ]);
                    */

                    return redirect(route('detalle_pago',['pago_id'=>$pago_dueno->id]));
                    }else{
                        $this->dispatch('no_tickets');
                        return;
                    }

            } else {
                $this->dispatch('error_periodo');
                return;
            }
        }
    }

    #[On('realizado')]
    public function realizado(){
        //return redirect(route('pagos'));
    }
}