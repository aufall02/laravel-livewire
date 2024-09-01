<?php

namespace App\Livewire\Forms;

use App\Models\Transaksi;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TransaksiForm extends Form
{
    public $customer_id;
    public $items;
    public $decs;
    public $price;
    public $done;

    public ?Transaksi $transaksi;


    public function setTransaksi(Transaksi $transaksi)
    {
        $this->transaksi = $transaksi;
        $this->customer_id = $transaksi->customer_id;
        $this->items = $transaksi->items;
        $this->decs = $transaksi->decs;
        $this->price = $transaksi->price;
        $this->done = $transaksi->done;
    }
    public function store()
    {
        $validate = $this->validate([
            'transaksi' => 'required',
            'customer_id' => 'required',
            'items' => 'required',
            'decs' => 'required',
            'price' => 'required',
            'done' => 'required',
        ]);

        Transaksi::create($validate);
        $this->reset();
    }
    public function update()
    {
        $validate = $this->validate([
            'transaksi' => 'required',
            'customer_id' => 'required',
            'items' => 'required',
            'decs' => 'required',
            'price' => 'required',
            'done' => 'required',
        ]);

        $this->transaksi->update($validate);
        $this->reset();
    }
}
