<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
{

    //
    public $name;
    public $contact;
    public $decs;

    public ?Customer $customer;


    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->contact = $customer->contact;
        $this->decs = $customer->decs;

    }

    public function store()
    {
        $validate = $this->validate([
            "name" => "required",
            "contact" => "required",
            "decs" => "",
        ]);

        Customer::create($validate);
        $this->reset();
    }
    public function update()
    {
        $validate = $this->validate([
            "name" => "required",
            "contact" => "required",
            "decs" => "",
        ]);



        $this->customer->update($validate);
        $this->reset();
    }
}
