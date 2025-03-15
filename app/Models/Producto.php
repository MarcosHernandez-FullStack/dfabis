<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
    public function unidad():BelongsTo
    {
        return $this->belongsTo(Unidad::class);
    }
    public function detalles_carta():HasMany
    {
        return $this->hasMany(DetalleCarta::class);
    }
    public function detalles_compra():HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }
    public function detalles_pedido():HasMany
    {
        return $this->hasMany(DetallePedido::class);
    }
    public function getNombreCompletoAttribute()
    {
        return "{$this->unidad->nombre} {$this->nombre}";
    }
}
