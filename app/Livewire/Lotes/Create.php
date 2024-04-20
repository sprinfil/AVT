<?php

namespace App\Livewire\Lotes;

use App\Models\Lote;
use App\Models\Zona;
use Livewire\Component;

class Create extends Component
{
    public $id;
    public $zona;
    public $lotes;

    public $lote, $manzana, $catastral, $superficie, $precio;
    public $noreste, $sureste;
    public $suroeste, $noroeste;
    public $norte, $sur, $este, $oeste;

    public $colindancia_noreste_id = '', $colindancia_noroeste_id = '', $colindancia_sureste_id = '', $colindancia_suroeste_id = '',
    $colindancia_norte_id = '', $colindancia_sur_id = '', $colindancia_este_id = '', $colindancia_oeste_id = '';
    
    public function render()
    {
        $this->zona = Zona::find($this->id);
        $this->lotes = Lote::where('zona', $this->zona->id)->whereNull('baja')->get();
        $ultimoLote = Lote::where('zona', $this->zona->id)
                        ->orderBy('id', 'desc')
                        ->first();



        return view('livewire.lotes.create', ['zona' => $this->zona]);
    }

    public function submit(){
        $this->validate();
        Lote::create([
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
            'zona' => $this->zona->id,
            
            'colindancia_noreste_id' => $this->colindancia_noreste_id !== '' ? $this->colindancia_noreste_id : null,
            'colindancia_sureste_id' => $this->colindancia_sureste_id !== '' ? $this->colindancia_sureste_id : null,
            'colindancia_suroeste_id' => $this->colindancia_suroeste_id !== '' ? $this->colindancia_suroeste_id : null,
            'colindancia_noroeste_id' => $this->colindancia_noroeste_id !== '' ? $this->colindancia_noroeste_id : null,
            'colindancia_norte_id' => $this->colindancia_norte_id !== '' ? $this->colindancia_norte_id : null,
            'colindancia_sur_id' => $this->colindancia_sur_id !== '' ? $this->colindancia_sur_id : null,
            'colindancia_este_id' => $this->colindancia_este_id !== '' ? $this->colindancia_este_id : null,
            'colindancia_oeste_id' => $this->colindancia_oeste_id !== '' ? $this->colindancia_oeste_id : null,
        ]);

        return redirect()->route('zonas.show' , ['id' => $this->zona->id]);
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
        
        'colindancia_noreste_id' => 'nullable',
        'colindancia_sureste_id' => 'nullable',
        'colindancia_noroeste_id' => 'nullable',
        'colindancia_suroeste_id' => 'nullable',
        'colindancia_norte_id' => 'nullable',
        'colindancia_sur_id' => 'nullable',
        'colindancia_este_id' => 'nullable',
        'colindancia_oeste_id' => 'nullable',
    ];


    public function cancelar(){
        return redirect()->route('zonas.show', ['id' => $this->zona->id]);
    }
}
