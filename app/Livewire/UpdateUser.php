<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UpdateUser extends Component
{

    public $user;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;


    protected $rules = [
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'telefono' => 'required|max:50',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->nombre = $user->nombre;
        $this->apellido = $user->apellido;
        $this->correo = $user->correo;
        $this->telefono = $user->telefono;
    }

    public function render()
    {

        return view('livewire.update-user');
    }

    public function update() {

        $this->rules['correo'] = 'required|unique:users,correo,' . $this->user->id . '|max:255';

        $validated = $this->validate();

        $this->user->update($validated);
        $this->reset();

        session()->flash('action', 'Usuario actualizado exitosamente');
 
        $this->redirect('/users');

    }
}
