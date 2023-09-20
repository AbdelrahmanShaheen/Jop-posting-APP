<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email')]
    public $email;
    #[Rule('required')]
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    public function authenticate()
    {
        $credentials = $this->validate();
        if (Auth::attempt($credentials)) {
            Session::regenerate();
            session()->flash('message', 'User was logged in successfully');
            return redirect('/');
        }
        return $this->addError('email', 'The provided credentials do not match our records.');
    }
}