<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    use HasFactory;

    protected $table = 'cupons';
    protected $fillable = [
        'codigo',
        'desconto',
        'validade',
        'valor_minimo',
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'cupom_id');
    }
}
