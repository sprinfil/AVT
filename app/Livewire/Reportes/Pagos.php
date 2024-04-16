<?php

namespace App\Livewire\Reportes;

use App\Models\Zona;
use Livewire\Component;

class Pagos extends Component
{
    public $zonas;
    public $fecha;
    public $nombre_zona;
    public $zona = 'selecciona';
    public $zona_seleccionada;

    public function mount()
    {
        $this->fecha = now()->format('Y-m-d'); // Set default value for fecha to today's date
    }

    public function render()
    {
        $query = Zona::query()->whereNull('baja');
    
        if (!empty($this->nombre_zona)) {
            $this->zonas = $query->where('nombre', 'LIKE', '%' . $this->nombre_zona . '%')->get();
        } else {
            $this->zonas = $query->get();
        }
        
        if ($this->zona && $this->zona !== 'GENERAL' && $this->zona !== 'selecciona' && !$this->zona_seleccionada) {
            $this->zona_seleccionada = Zona::find($this->zona);
        }
        return view('livewire.reportes.pagos');
    }

    public function actualizar_filtro(){
        $this->render();
    }

    public function actualizar_zona(){
        if ($this->zona == 'GENERAL') {
            $this->zona_seleccionada = 'GENERAL';
        } else {
            $this->zona_seleccionada = Zona::find($this->zona);
        }
    }

    public function submit(){
        $this->advertencia_reporte();
    }
    public function cancelar(){
        return redirect(route('reportes.pagos'));
    }
    
    public function advertencia_reporte(){
        $this->dispatch('advertencia_reporte');
    }
}
