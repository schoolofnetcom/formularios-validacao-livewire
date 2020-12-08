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
    public $confirmPassword;

    public function register() {
        $data = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // 'password' => 'required|string|confirmed|min:8',
        ]);

        // dd($data);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
