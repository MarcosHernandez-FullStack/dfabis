<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;
    protected $table = 'detalle_pedido';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function pedido():BelongsTo
    {
        return $this->belongsTo(Pedido::class);
    }
    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
