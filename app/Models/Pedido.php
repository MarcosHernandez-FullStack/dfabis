<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function cliente():BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
    public function mesa():BelongsTo
    {
        return $this->belongsTo(Mesa::class);
    }
    public function detalles_pedido():HasMany
    {
        return $this->hasMany(DetallePedido::class);
    }
}
