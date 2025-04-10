<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = 'mesa';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function pedidos():HasMany
    {
        return $this->hasMany(Pedido::class);
    }
}
