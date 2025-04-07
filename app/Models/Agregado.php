<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agregado extends Model
{
    use HasFactory;
    protected $table = 'agregado';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function detalle_pedido():BelongsTo
    {
        return $this->belongsTo(DetallePedido::class);
    }
    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
