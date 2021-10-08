<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Flat;


class Crud extends Component
{
    public $flats, $name, $location, $lat, $long, $flat_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->flats = Flat::all();
        return view('livewire.crud');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->location = '';
        $this->lat = '';
        $this->long = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'location' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);
    
        Flat::updateOrCreate(['id' => $this->flat_id], [
            'name' => $this->name,
            'location' => $this->location,
            'lat' => $this->lat,
            'long' => $this->long,
        ]);

        session()->flash('message', $this->flat_id ? 'The Flats Successfully Updated.' : 'The Flats Successfully Created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $flat = Flat::findOrFail($id);
        $this->flat_id = $id;
        $this->name = $flat->name;
        $this->location = $flat->location;
        $this->lat = $flat->lat;
        $this->long = $flat->long;
    
        $this->openModalPopover();
    }

    public function delete($id)
    {
        Flat::find($id)->delete();
        session()->flash('message', 'The Flats Has Been Deleted Successfully.');
    }
}
