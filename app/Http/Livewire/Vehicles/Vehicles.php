<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\Vehicle;
use Livewire\Component;

class Vehicles extends Component
{
    public $search='';

    public function render()
    {
        $vehicles = Vehicle::where('year', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.vehicles.vehicles', compact('vehicles'));
    }
}
