<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;

class Login extends Component
{

    public $correo;
    public $password;

    protected $rules = [
        'correo' => 'required|max:255',
        'password' => 'required|max:255'
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function loginUser(Request $request) {
        
        $validated = $this->validate();

        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return $this->redirect('/users', navigate:true);
        }

        $this->addError('password', 'Credenciales incorrectas');
    }
}
