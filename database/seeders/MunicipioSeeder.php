<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    public function run(): void
    {
        $municipios = [
            'Brasília',
            'Goiânia',
            'Vitória',
            'Campinas',
            'Manaus',
            'Rio de Janeiro',
        ];

        foreach ($municipios as $nome) {
            Municipio::create([
                'nome' => $nome
            ]);
        }
    }
}