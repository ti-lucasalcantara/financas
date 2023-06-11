<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Produtos extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');
        for ($i=1; $i <=100; $i++) { 
            $dados = [
                'nome' => $faker->words(3, true),
                'codigo' => substr($faker->uuid(),0,5),
            ];
            $this->db->table('produtos')->insert($dados);
        }
    }
}
