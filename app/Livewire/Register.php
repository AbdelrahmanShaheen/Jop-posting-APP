<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Register extends Component
{
    #[Rule('required')]
    public $name;
    #[Rule('required|email|unique:users')]
    public $email;
    #[Rule('required|confirmed')]
    public $password;
    #[Rule('required|same:password')]
    public $password_confirmation;
    public function render()
    {
        return view('livewire.register');
    }
    public function register()
    {

        $formData = $this->validate();

        $formData['password'] = bcrypt($formData['password']);

        $user = User::create($formData);

        Auth::login($user);
        session()->flash('message', 'User was created in successfully');
        return redirect('/');
    }

}