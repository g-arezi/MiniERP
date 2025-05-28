<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = [
        'cliente_nome',
        'cliente_email',
        'endereco',
        'cep',
        'subtotal',
        'frete',
        'total',
        'cupom_id',
        'status',
    ];

    public function cupom()
    {
        return $this->belongsTo(Cupom::class, 'cupom_id');
    }

    public function itens()
    {
        return $this->hasMany(PedidoItem::class, 'pedido_id');
    }
}
