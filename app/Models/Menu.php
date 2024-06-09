<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'decs',
        'type',
        'photo'
    ];

    public static $types = [
        'coffe',
        'non-coffe',
        'tea',
        'dessert'

    ];




    public function getHargaAttribute(): string
    {
        return "Rp. " . Number::format($this->price);
    }

    public function getAvatarAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('noimage.jpg');
    }
}
