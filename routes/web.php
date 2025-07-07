<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Prueba;
use App\Livewire\Pedido\MesaComponent;
use App\Livewire\Pedido\PedidoFormComponent;

/* Route::get('/', function () {
    return view('app');
}); */

Route::get('/prueba', Prueba::class)->name('prueba'); 
Route::get('/mesas', MesaComponent::class)->name('mesas'); 
Route::get('/pedidoform/{mesa_id}', PedidoFormComponent::class)->name('pedidoform'); 