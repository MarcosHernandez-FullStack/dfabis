<?php

namespace App\Livewire\Pedido;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Crema;

class PedidoFormComponent extends Component
{
    public $mesa_id;
    public function mount($mesa_id)
    {
        $this->mesa_id = $mesa_id;
    }

    public function render()
    {
        $productos=Producto::where('estado','activo')->get();
        $cremas=Crema::where('estado','activo')->get();
        return view('livewire.pedido.pedido-form-component',compact('productos','cremas'))
            ->extends('layouts.app')
            ->section('content');
    }
}
