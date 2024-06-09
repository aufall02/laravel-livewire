<?php

namespace App\Livewire\Forms;

use App\Models\Menu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MenuForm extends Form
{
    //
    public $name;
    public $price;
    public $decs;
    public $type;
    public $photo;

    public ?Menu $menu;


    public function setMenu(Menu $menu)
    {
        $this->menu = $menu;
        $this->name = $menu->name;
        $this->price = $menu->price;
        $this->decs = $menu->decs;
        $this->type = $menu->type;
        $this->photo = $menu->photo;
    }

    public function store()
    {
        $validate = $this->validate([
            "name" => "required",
            "price" => "required",
            "type" => "required",
            "decs" => "required",
        ]);

        if ($this->photo) {
            $validate['photo'] = $this->photo;
        }

        Menu::create($validate);

        $this->reset();
    }
    public function update()
    {
        $validate = $this->validate([
            "name" => "required",
            "price" => "required",
            "type" => "required",
            "decs" => "required",
        ]);

        if ($this->photo) {
            $validate['photo'] = $this->photo;
        }

        $this->menu->update($validate);

        $this->reset();
    }
}
