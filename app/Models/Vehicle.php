<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function conditions()
    {
        return $this->belongsTo(Condition::class);
    }
    public function paymentMethods()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
    public function proprietaries()
    {
        return $this->belongsTo(Proprietary::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function makeModels()
    {
        return $this->belongsTo(MakeModel::class);
    }
    public function transmissions()
    {
        return $this->belongsTo(Transmission::class);
    }
    public function statusVehicles()
    {
        return $this->belongsTo(StatusVehicle::class);
    }
}
