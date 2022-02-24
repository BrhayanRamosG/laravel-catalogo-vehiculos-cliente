<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\Vehicle;
use Livewire\Component;

class VehicleCard extends Component
{
    private $orderBy = '';
    private $orderByValue = '';
    public $categoryId = '';
    public $opc = '';

    public function render()
    {
        $pages = 12;
        $columns = [
            'transmissions',
            'categories',
            'paymentMethods',
            'statusVehicles',
            'conditions',
            'makeModels.makes'
        ];

        switch ($this->opc) {
            case '1':
                $this->orderBy = 'price';
                $this->orderByValue = 'DESC';
                break;
            case '2':
                $this->orderBy = 'price';
                $this->orderByValue = 'ASC';
                break;
            case '3':
                $this->orderBy = 'model_name';
                $this->orderByValue = 'DESC';
                break;
            case '4':
                $this->orderBy = 'model_name';
                $this->orderByValue = 'ASC';
                break;
        }


        if ($this->orderBy != '' && $this->categoryId != '') {
            $vehicles = Vehicle::with($columns)
                ->join('make_models', 'make_models.id', '=', 'vehicles.make_models_id')
                ->where('categories_id',  $this->categoryId)
                ->orderBy($this->orderBy, $this->orderByValue)
                ->get();
        } else {
            $vehicles = Vehicle::with($columns)
                ->where('categories_id',  $this->categoryId)->get();
        }


        if ($this->categoryId == '') {
            $vehicles = Vehicle::with($columns)
                ->orderBy('id', 'DESC')
                ->paginate($pages);
        }
        
        if ($this->categoryId == '' && $this->orderBy != '') {
            $vehicles = Vehicle::with($columns)
                ->join('make_models', 'make_models.id', '=', 'vehicles.make_models_id')
                ->orderBy($this->orderBy, $this->orderByValue)
                ->paginate($pages);
        }



        return view('livewire.vehicles.vehicle-card', compact('vehicles'));
    }
}
