<?php

namespace App\Livewire\Usuarios;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Usuarios extends Component
{
    public $filtroNombre;
    public $showModal = false;
    public $editando = false;
    public $usuarioEdit;
    public $esconder = 'hidden';
    public $usuarioEn;

    public $name;
    public $email;
    public $username;
    public $password;
    public $tipo = 'ADMIN';

    public function render()
    {
        $query = User::query();
    
        if (!empty($this->filtroNombre)) {
            $query->where('name', 'LIKE', '%' . $this->filtroNombre . '%');
        }
    
        $usuarios = $query->orderBy('id')->paginate(7);
    
        return view('livewire.usuarios.usuarios', compact('usuarios'));
    }

    public function guardarUsuario()
    {
        if($this->editando){
            dd('hy');
        }
        else{
            $this->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'username' => 'required|unique:users,username',
                'password' => 'required',
                'tipo' => 'required',
            ]);
    
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
                'password' => bcrypt($this->password),
                'tipo' => $this->tipo,
            ]);
    
            $this->aceptar();
    
            $this->reset();
            $this->showModal = false;
        }
    }
    
    public function aceptar(){
        $this->dispatch('success');
    }
    public function aceptarEdit(){
        $this->dispatch('successEdit');
    }
    public function aceptarDelete(){
        $this->dispatch('successDelete');
    }
       
    public function actualizarFiltroUsuario()
    {
        $this->render();
    }

    public function edit($usuario_id){
        $this->editando = true;
        $this->showModal = true;
        $this->usuarioEdit = User::find($usuario_id);

        $this->name = $this->usuarioEdit->name;
        $this->email = $this->usuarioEdit->email;
        $this->username = $this->usuarioEdit->username;
        $this->tipo = $this->usuarioEdit->tipo;
    }

    public function editar($usuario_id){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->usuarioEdit->id,
            'username' => 'required|unique:users,username,' . $this->usuarioEdit->id,
            'tipo' => 'required',
        ]);

        $this->usuarioEdit->name = $this->name;
        $this->usuarioEdit->email = $this->email;
        $this->usuarioEdit->username = $this->username;

        if($this->password != null)
            $this->usuarioEdit->password = bcrypt($this->password);

        $this->usuarioEdit->tipo = $this->tipo;
        $this->usuarioEdit->save();

        $this->aceptarEdit();
            
        $this->reset();
        $this->showModal = false;
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

    public function eliminarUsuario($usuario_id){
        $this->esconder = 'visible';
        $this->usuarioEn = User::find($usuario_id);
    }

    public function delete(){
        if ($this->usuarioEn) {
            $this->usuarioEn->delete();
            $this->salir();
            $this->aceptarDelete();
        }
    }
}
