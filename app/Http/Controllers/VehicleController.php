<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vehicles = Vehicle::all();
        // return view('vehicles', compact('vehicles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $category = null)
    {
        $detailVehicle = Vehicle::with([
            'transmissions',
            'categories',
            'paymentMethods',
            'statusVehicles',
            'conditions',
            'makeModels.makes'
        ])->where('id', '=', $id)->where('categories_id', '=', $category)->get();

        return view('details-vehicle', compact('detailVehicle'));
    }

    public function vehicles()
    {
        return view('vehicles');
    }
    public function seminew_used_vehicles()
    {
        return view('seminew-used-vehicles');
    }

    public function new_vehicles()
    {
        return view('new-vehicles');
    }

    public function cheap_vehicles()
    {
        return view('cheap-vehicles');
    }
}
