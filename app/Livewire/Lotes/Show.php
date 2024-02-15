<?php

namespace App\Livewire\Lotes;

use App\Models\Lote;
use Livewire\Component;

class Show extends Component
{
    public $id;
    public $Instance; // Cambiado de $lote a $loteInstance
    public $lotes;


    public $lote, $manzana, $catastral, $superficie, $precio;
    public $noreste, $sureste;
    public $suroeste, $noroeste;
    public $norte, $sur, $este, $oeste;

    public $colindancia_noreste_id = 0, $colindancia_noroeste_id = 0, $colindancia_sureste_id = 0, $colindancia_suroeste_id = 0,
    $colindancia_norte_id = 0, $colindancia_sur_id = 0, $colindancia_este_id = 0, $colindancia_oeste_id = 0;

    public function mount()
    {
        $this->loadLote();
    }

    public function render()
    {
        return view('livewire.lotes.show');
    }

    private function loadLote()
    {
        $this->Instance = Lote::find($this->id);
        $this->lotes = Lote::where('zona', $this->Instance->zona)->whereNull('baja')->where('id',  '!=', $this->id)->get();
        
        if ($this->Instance) {
            $this->lote = $this->Instance->lote;
            $this->manzana = $this->Instance->manzana;
            $this->catastral = $this->Instance->catastral;
            $this->superficie = $this->Instance->superficie;
            $this->precio = $this->Instance->precio;
            $this->noreste = $this->Instance->noreste;
            $this->sureste = $this->Instance->sureste;
            $this->suroeste = $this->Instance->suroeste;
            $this->noroeste = $this->Instance->noroeste;
            $this->norte = $this->Instance->norte;
            $this->sur = $this->Instance->sur;
            $this->este = $this->Instance->este;
            $this->oeste = $this->Instance->oeste;

            $this->colindancia_noreste_id = $this->Instance->colindancia_noreste_id ?? 0;
            $this->colindancia_sureste_id = $this->Instance->colindancia_sureste_id ?? 0;
            $this->colindancia_suroeste_id = $this->Instance->colindancia_suroeste_id ?? 0;
            $this->colindancia_noroeste_id = $this->Instance->colindancia_noroeste_id ?? 0;
            $this->colindancia_norte_id = $this->Instance->colindancia_norte_id ?? 0;
            $this->colindancia_sur_id = $this->Instance->colindancia_sur_id ?? 0;
            $this->colindancia_este_id = $this->Instance->colindancia_este_id ?? 0;
            $this->colindancia_oeste_id = $this->Instance->colindancia_oeste_id ?? 0;
        }
    }

    public function submit(){
        $this->validate();

        Lote::where('id', $this->Instance->id)->update([
            'lote' => $this->lote,
            'manzana' => $this->manzana,
            'catastral' => $this->catastral,
            'superficie' => $this->superficie,
            'precio' => $this->precio,
            'noreste' => $this->noreste,
            'sureste' => $this->sureste,
            'suroeste' => $this->suroeste,
            'noroeste' => $this->noroeste,
            'norte' => $this->norte,
            'sur' => $this->sur,
            'este' => $this->este,
            'oeste' => $this->oeste,

            'colindancia_noreste_id' => $this->colindancia_noreste_id !== 0 ? $this->colindancia_noreste_id : null,
            'colindancia_sureste_id' => $this->colindancia_sureste_id !== 0 ? $this->colindancia_sureste_id : null,
            'colindancia_suroeste_id' => $this->colindancia_suroeste_id !== 0 ? $this->colindancia_suroeste_id : null,
            'colindancia_noroeste_id' => $this->colindancia_noroeste_id !== 0 ? $this->colindancia_noroeste_id : null,
            'colindancia_norte_id' => $this->colindancia_norte_id !== 0 ? $this->colindancia_norte_id : null,
            'colindancia_sur_id' => $this->colindancia_sur_id !== 0 ? $this->colindancia_sur_id : null,
            'colindancia_este_id' => $this->colindancia_este_id !== 0 ? $this->colindancia_este_id : null,
            'colindancia_oeste_id' => $this->colindancia_oeste_id !== 0 ? $this->colindancia_oeste_id : null,
        ]);

        return redirect()->route('zonas.show' , ['id' => $this->Instance->zona]);
    }

    protected $rules = [
        'lote' => 'required|numeric',
        'manzana' => 'nullable',
        'catastral' => 'nullable',
        'superficie' => 'nullable|numeric',
        'precio' => 'nullable|numeric',
        'noreste' => 'nullable|numeric',
        'sureste' => 'nullable|numeric',
        'suroeste' => 'nullable|numeric',
        'noroeste' => 'nullable|numeric',
        'norte' => 'nullable|numeric',
        'sur' => 'nullable|numeric',
        'este' => 'nullable|numeric',
        'oeste' => 'nullable|numeric',

        'colindancia_noreste_id' => 'nullable|numeric',
        'colindancia_sureste_id' => 'nullable|numeric',
        'colindancia_noroeste_id' => 'nullable|numeric',
        'colindancia_suroeste_id' => 'nullable|numeric',
        'colindancia_norte_id' => 'nullable|numeric',
        'colindancia_sur_id' => 'nullable|numeric',
        'colindancia_este_id' => 'nullable|numeric',
        'colindancia_oeste_id' => 'nullable|numeric',
    ];


    public function cancelar(){
        return redirect()->route('zonas.show', ['id' => $this->Instance->zona]);
    }
}
