<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $age = '';
    public $estado = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email', // Modified: Added email validation
            'phone' => 'required|digits:10',
            'age' => 'required|numeric|min:18',
            'estado' => 'required',
        ]);
        Customer::create($this->all());
        $this->reset();
    }
}
