<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{

    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $password;

    protected $rules = [
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'correo' => 'required|unique:users|max:255',
        'telefono' => 'required|max:50',
        'password' => 'required|max:255'
    ];

    public function render()
    {
        return view('livewire.create-user');
    }

    public function save() {

        $validated = $this->validate();

        User::create($validated);
        $this->reset();

        session()->flash('action', 'Usuario creado exitosamente');
 
        $this->redirect('/users');

    }
}
