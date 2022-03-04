<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class VehicleCard extends Component
{
    use WithPagination;

    public $categoryId = '';
    public $opc = '';
    public $pages = '16';

    public function render()
    {
        $columns = [
            'transmissions',
            'categories',
            'paymentMethods',
            'statusVehicles',
            'conditions',
            'makeModels.makes'
        ];
        $vehicles = Vehicle::with($columns)
            ->joinMakeModel($this->opc)
            ->category($this->categoryId)
            ->paginate($this->pages);

        return view('livewire.vehicles.vehicle-card', compact('vehicles'));
    }
    public function reset_page()
    {
        $this->resetPage();
    }
}
