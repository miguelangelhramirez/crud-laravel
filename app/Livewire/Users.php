<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;

class Users extends Component
{
    public $users = [];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.users');
    }

    public function deleteUser(User $id) {

        if(Auth::user()->correo == $id->correo){
            session()->flash('error', 'No puedes eliminar tu propio usuario');
            return $this->redirect('/users');
        }     
        $id->delete();
        session()->flash('action', 'Usuario eliminado exitosamente');
        $this->redirect('/users');

    }
}
