<?php

namespace App\Livewire;

use Livewire\Component;

class Prueba extends Component
{
    public function render()
    {
         return view('livewire.prueba')
            ->extends('layouts.app')
            ->section('content');
    }
}
