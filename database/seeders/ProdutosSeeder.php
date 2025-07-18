<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
                'nome' => 'Gustavo Almeida',
                'valor' => '20.00'
            ]);

            Produto::create([
                'nome' => 'Sr Incrível',
                'valor' => '40.00'
            ]);

            Produto::create([
                'nome' => 'Patrick Estrela',
                'valor' => '11.00'
            ]);

            Produto::create([
                'nome' => 'Shrek',
                'valor' => '32.00'
            ]);
    }
}
