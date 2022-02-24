<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesColor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
    public function colors()
    {
        return $this->hasMany(Color::class);
    }
}
