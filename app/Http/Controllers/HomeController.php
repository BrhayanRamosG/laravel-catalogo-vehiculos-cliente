<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $homeVehicles = Vehicle::with([
            'transmissions',
            'categories',
            'paymentMethods',
            'statusVehicles',
            'conditions',
            'makeModels.makes'
        ])->limit(8)->orderBy('id', 'DESC')->get();
        return view('home', compact('homeVehicles'));
    }
}
