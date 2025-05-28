<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'preco',
    ];

    public function estoques()
    {
        return $this->hasMany(Estoque::class, 'produto_id');
    }

    public function pedidoItens()
    {
        return $this->hasMany(PedidoItem::class, 'produto_id');
    }
}
