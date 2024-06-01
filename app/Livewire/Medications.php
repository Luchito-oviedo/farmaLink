<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Medication;

class Medications extends Component
{
    public $medications, $name, $descriptions, $price, $id_producto;
    public $modal = false;

    public function render()
    {
        $this->medications = Medication::all();
        return view('livewire.medications');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->name = '';
        $this->descriptions = '';
        $this->price = '';
        $this->id_producto = '';
    }

    public function editar($id)
    {
        $medication = Medication::findOrfail($id);
        $this->id_producto = $id;
        $this->name = $medication->name;
        $this->descriptions = $medication->descriptions;
        $this->price = $medication->price;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Medication::find($id)->delete();
        session()->flash('message', 'Producto eliminado correctamente');
    }

    public function guardar()
    {
        Medication::updateOrCreate(
            ['id' => $this->id_producto],
            [
                'name' => $this->name,
                'descriptions' => $this->descriptions,
                'price' => $this->price
            ]
        );
        session()->flash('message', 
        $this->id_producto ? '¡Actualizacion exitosa' : '¡Registro exitoso!');

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
