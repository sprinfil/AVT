<?php

namespace App\Livewire\Zonas;

use App\Models\Lote;
use App\Models\Zona;
use App\Models\Persona;
use Livewire\Component;
use Livewire\Attributes\On; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads;
    public $personas;
    public $dueno_id = 0;
    public $zona;
    public $nombre;
    public $numero;
    public $numero_lotes = 0;
    public $showModal = false;
    public $editando = false;
    public $esconder = 'hidden';
    public $filtroNombre;
    public $antecedentes;

    public $zona_id = 0;

    public $nombre_dueno_zona;
    public $zona_eliminar;
    public $numero_manzanas;

    public $imagen_contrato= null;
    public $imagen_general =null;
    public $color;

    protected $rules = [
        'nombre' => 'required|min:5',
        'numero' => 'required|numeric|min:1',
        'dueno_id' => 'required|not_in:0',
        'numero_lotes' => 'required|min:1',
        'antecedentes' => 'nullable',
        'numero_manzanas' => 'numeric',
    ];

    public function render()
    {

        // Se pueden pasar directamente a la vista sin necesidad de asignar a propiedades
        $zonas = Zona::whereNull('baja')->get();
        $qPersonas = Persona::query();


        if ($this->filtroNombre != '') {
            $qPersonas = Persona::where(DB::raw("CONCAT(nombre, ' ',apellido_1, ' ', apellido_2)"), 'LIKE', '%' . $this->filtroNombre . '%')->get();
            if ($qPersonas->count() == 1) {
                $this->dueno_id = $qPersonas->first()->id;
            }
        } else {
            $qPersonas = Persona::All();
        }

        $this->personas = $qPersonas;

        return view('livewire.zonas.index', [
            'zonas' => $zonas,
            'personas' => $this->personas,
        ]);
    }

    public function mount(){
        $this->dueno_id = Persona::orderBy('id','asc')->first()->id;
    }
    public function guardarZona()
    {
        $this->validate();

         //guardar imagenes
         if($this->imagen_contrato){
            $this->imagen_contrato->storeAs('public/imagenes_zonas', $this->nombre . "_contrato.png");
         }
         if( $this->imagen_general){
            $this->imagen_general->storeAs('public/imagenes_zonas', $this->nombre . "_general.png");
         }


        $zona = Zona::create([
            'nombre' => $this->nombre,
            'numero' => $this->numero,
            'dueno_id' => $this->dueno_id,
            'antecedentes' => $this->antecedentes,
            "imagen_contrato"=> $this->imagen_contrato != null ? $this->nombre . "_contrato.png" : null,
            "imagen_general" => $this->imagen_general != null ? $this->nombre . "_general.png" : null,
            "color" => $this->color,
        ]);

        $contador_numero_lote = 1;
        $contador_numero_manzana = 1;
        $lotes_por_manzana = $this->numero_lotes / $this->numero_manzanas; 
        //dd($lotes_por_manzana);

        for ($i = 0; $i < $this->numero_lotes; $i++) {

            if($contador_numero_lote > $lotes_por_manzana){
                if($contador_numero_manzana < $this->numero_manzanas){
                    $contador_numero_lote = 1;
                    $contador_numero_manzana = $contador_numero_manzana + 1;
                }
            }

            Lote::create([
                'lote' => $contador_numero_lote, 
                'zona' => $zona->id, 
                'manzana' => $contador_numero_manzana,
            ]);
            $contador_numero_lote = $contador_numero_lote + 1;
        }

        $this->aceptar();
        $this->cerrarModal();
    }

    public function edit($id)
    {

        $this->editando = true;
        $this->zona = Zona::find($id);
        $this->zona_id = $id;
        $this->nombre = $this->zona->nombre;
        $this->numero = $this->zona->numero;
        $this->nombre_dueno_zona = $this->zona->dueno->nombreCompleto();
        $this->antecedentes = $this->zona->antecedentes;
        $this->color = $this->zona->color;

        $this->abrirModal();
    }
    public function editar($id)
    {
        //guardar imagenes
        if($this->imagen_contrato){
            $this->imagen_contrato->storeAs('public/imagenes_zonas', $this->nombre . "_contrato.png");
        }
        if( $this->imagen_general){
            $this->imagen_general->storeAs('public/imagenes_zonas', $this->nombre . "_general.png");
        }

        $zona = Zona::find($id);
        $zona->imagen_contrato = $this->nombre . "_contrato.png";
        $zona->imagen_general = $this->nombre . "_general.png";
        $zona->color =  $this->color;
        $zona->nombre = $this->nombre;
        $zona->numero = $this->numero;
        $zona->antecedentes = $this->antecedentes;
        if ($this->dueno_id == 0)
            $zona->dueno_id = $zona->dueno_id;
        else
            $zona->dueno_id = $this->dueno_id;

        $zona->save();



        $this->editando();
        $this->cerrarModal();
    }

    public function ver(Zona $zona)
    {
        return redirect()->route('zonas.show', ['id' => $zona->id]);
    }


    public function editando()
    {
        $this->dispatch('success_edit'); // Cambiado a dispatchBrowserEvent
    }
    public function aceptar()
    {
        $this->dispatch('success'); // Cambiado a dispatchBrowserEvent
    }

    public function abrirModal()
    {
        $this->showModal = true;
    }

    public function cerrarModal()
    {
        $this->reset();
        $this->showModal = false;
    }

    public function salir()
    {
        $this->esconder = 'hidden';
    }

    public function actualizarFiltroNombre()
    {
        $this->render();
    }
    public function show_eliminar($id){
        $this->zona_eliminar = Zona::find($id);
        $this->dispatch('show_eliminar');

    }

    #[On('eliminar')] 
    public function eliminar(){
        $zona = $this->zona_eliminar;
        $zona->baja = "si";
        $zona->save();
        $this->render();
        $this->dispatch('success_delete'); 
    }
}
