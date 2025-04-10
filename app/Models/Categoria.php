<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $guarded = [];
    protected $connection = 'mysql';

    public function productos():HasMany
    {
        return $this->hasMany(Producto::class);
    }
}
