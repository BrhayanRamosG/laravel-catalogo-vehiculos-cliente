<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    //Scopes
    public function scopeJoinMakeModel($query, $opc)
    {
        if ($opc == '1' || $opc == '2') {
            $orderBy = 'price';
            $opc == '1' ? $orderByValue = 'DESC' : $orderByValue = 'ASC';
        } elseif ($opc == '3' || $opc == '4') {
            $orderBy = 'model_name';
            $opc == '3' ? $orderByValue = 'DESC' : $orderByValue = 'ASC';
        } elseif ($opc == '5' || $opc == '6') {
            $orderBy = 'year';
            $opc == '5' ? $orderByValue = 'DESC' : $orderByValue = 'ASC';
        } else {
            $orderBy = 'vehicles.id';
            $orderByValue = 'DESC';
        }

        return $query->join('make_models', 'make_models.id', '=', 'vehicles.make_models_id')->orderBy($orderBy, $orderByValue);
    }
    public function scopeCategory($query, $categoryId)
    {
        if ($categoryId) {
            return $query->where('categories_id',  $categoryId);
        }
    }

    //Relationships
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
