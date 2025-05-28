<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Produtos
        $produtos = [];
        for ($i = 1; $i <= 10; $i++) {
            $produtos[] = [
                'nome' => 'Produto ' . $i,
                'preco' => rand(10, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('produtos')->insert($produtos);

        // Estoque
        $estoques = [];
        foreach (range(1, 10) as $produtoId) {
            $variacoes = ['P', 'M', 'G'];
            foreach ($variacoes as $var) {
                $estoques[] = [
                    'produto_id' => $produtoId,
                    'variacao' => $var,
                    'quantidade' => rand(1, 100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        DB::table('estoque')->insert($estoques);

        // Cupons
        $cupons = [];
        for ($i = 1; $i <= 10; $i++) {
            $cupons[] = [
                'codigo' => 'CUPOM' . $i,
                'desconto' => rand(5, 50),
                'validade' => Carbon::now()->addDays(rand(5, 30)),
                'valor_minimo' => rand(30, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('cupons')->insert($cupons);

        // Pedidos
        $pedidos = [];
        for ($i = 1; $i <= 10; $i++) {
            $subtotal = rand(50, 500);
            $frete = ($subtotal > 200) ? 0 : (($subtotal >= 52 && $subtotal <= 166.59) ? 15 : 20);
            $total = $subtotal + $frete;
            $pedidos[] = [
                'cliente_nome' => 'Cliente ' . $i,
                'cliente_email' => 'cliente' . $i . '@mail.com',
                'endereco' => 'Rua Exemplo, ' . $i,
                'cep' => '01001-00' . $i,
                'subtotal' => $subtotal,
                'frete' => $frete,
                'total' => $total,
                'cupom_id' => rand(1, 10),
                'status' => 'novo',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('pedidos')->insert($pedidos);
    }
}
