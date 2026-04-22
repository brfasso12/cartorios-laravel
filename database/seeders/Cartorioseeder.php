<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cartorio;
use App\Models\Municipio;

class CartorioSeeder extends Seeder
{
    public function run(): void
    {
        $brasilia = Municipio::where('nome', 'Brasília')->first();
        $goiania = Municipio::where('nome', 'Goiânia')->first();
        $vitoria = Municipio::where('nome', 'Vitória')->first();
        $campinas = Municipio::where('nome', 'Campinas')->first();
        $manaus = Municipio::where('nome', 'Manaus')->first();
        $rio = Municipio::where('nome', 'Rio de Janeiro')->first();

        if ($brasilia) {
            Cartorio::create([
                'nome' => '1º Cartório de Brasília',
                'cnpj' => '11111111000111',
                'tabeliao' => 'Carlos Almeida',
                'ativo' => 1,
                'municipio_id' => $brasilia->id
            ]);
        }

        if ($goiania) {
            Cartorio::create([
                'nome' => 'Cartório Central de Goiânia',
                'cnpj' => '22222222000122',
                'tabeliao' => 'Mariana Souza',
                'ativo' => 1,
                'municipio_id' => $goiania->id
            ]);
        }

        if ($vitoria) {
            Cartorio::create([
                'nome' => 'Cartório de Vitória Registro Civil',
                'cnpj' => '33333333000133',
                'tabeliao' => 'João Pereira',
                'ativo' => 0,
                'municipio_id' => $vitoria->id
            ]);
        }

        if ($campinas) {
            Cartorio::create([
                'nome' => 'Cartório Campinas Centro',
                'cnpj' => '44444444000144',
                'tabeliao' => 'Ana Lima',
                'ativo' => 0,
                'municipio_id' => $campinas->id
            ]);
        }

        if ($manaus) {
            Cartorio::create([
                'nome' => 'Cartório Manaus Norte',
                'cnpj' => '55555555000155',
                'tabeliao' => 'Ricardo Santos',
                'ativo' => 1,
                'municipio_id' => $manaus->id
            ]);
        }

        if ($rio) {
            Cartorio::create([
                'nome' => 'Cartório Rio de Janeiro Central',
                'cnpj' => '66666666000166',
                'tabeliao' => 'Fernanda Oliveira',
                'ativo' => 1,
                'municipio_id' => $rio->id
            ]);
        }
    }
}