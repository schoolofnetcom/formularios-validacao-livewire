<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;

    public function submit() {
        dd('estou dentro do submit');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
