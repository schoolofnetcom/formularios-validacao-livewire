<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register() {
        $data = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function updated($field) {
    //     if($field == 'email') {
    //         // faça alguma coisa
    //     }

    //     switch ($field) {
    //         case 'email':
    //             # code...
    //             break;

    //         default:
    //             # code...
    //             break;
    //     }
    // }

    public function updatedEmail() {
        $this->validate(['email' => 'unique:users']);
    }

    public function updatedPassword() {
        $this->validate(['password' => 'min:8']);
    }

    public function updatedPasswordConfirmation() {
        $this->validate([
            'password_confirmation' => 'min:8',
            'password' => 'confirmed'
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
