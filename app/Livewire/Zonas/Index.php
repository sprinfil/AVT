<?php

namespace App\Livewire\Zonas;

use App\Models\Lote;
use App\Models\Zona;
use App\Models\Persona;
use Livewire\Component;

class Index extends Component
{
    public $personas;
    public $dueno_id = 0;
    public $zona;
    public $nombre;
    public $numero_lotes = 0;
    public $precio = 0;
    public $showModal = false;
    public $editando = false;
    public $esconder = 'hidden';

    public $zona_id = 0;
    
    protected $rules = [
        'nombre' => 'required|min:5',
        'dueno_id' => 'required|not_in:0',
        'numero_lotes' => 'required|min:1',
        'precio' => 'required|min:0'
    ];

    public function render()
    {
        // Se pueden pasar directamente a la vista sin necesidad de asignar a propiedades
        $zonas = Zona::all();
        $qPersonas = Persona::query();
        
        if(empty($this->dueno_id)){
            $qPersonas = Persona::all();
        }else{
            $qPersonas = Persona::where('dueno_id', $this->dueno_id);
        }

        $this->personas = $qPersonas;
        
        return view('livewire.zonas.index', [
            'zonas' => $zonas, 
            'personas' => $this->personas,
        ]);
    }

    public function guardarZona()
    {
        $this->validate();

        $zona = Zona::create([
            'nombre' => $this->nombre,
            'dueno_id' => $this->dueno_id,
        ]);

        for ($i = 0; $i < $this->numero_lotes; $i++) {
            Lote::create([
                'lote' => $i + 1, // Asegúrate de que 'numero' es el campo correcto en la tabla 'lotes'.
                'precio' => $this->precio,
                'zona' => $zona->id, // Utilizar directamente el id de la zona creada.
            ]);
        }

        $this->aceptar();
        $this->cerrarModal();
    }

    public function eliminar($id){
        Zona::destroy($id);

        $this->eliminado();
    }

    public function edit($id){
        $this->abrirModal();
        $this->editando = true;

        $this->zona = Zona::find($id);
        $this->zona_id = $id;


        $this->nombre = $this->zona->nombre;
    }
    public function editar($id)
    {
        $zona = Zona::find($id);
        $zona->nombre = $this->nombre;
        if($this->dueno_id == 0)
            $zona->dueno_id = $zona->dueno_id;
        else
            $zona->dueno_id = $this->dueno_id;

        $zona->save();
        
        $this->editando();
        $this->cerrarModal();
    }

    public function ver($id){
        dd($id);
    }

    public function eliminado()
    {
        $this->dispatch('success_delete'); // Cambiado a dispatchBrowserEvent
    }
    public function editando()
    {
        $this->dispatch('success_edit'); // Cambiado a dispatchBrowserEvent
    }
    public function aceptar()
    {
        $this->dispatch('success'); // Cambiado a dispatchBrowserEvent
    }

    public function abrirModal(){
        $this->showModal = true;
    }

    public function cerrarModal()
    {
        $this->reset();
        $this->showModal = false;
    }

    public function salir(){
        $this->esconder = 'hidden';
    }
}
