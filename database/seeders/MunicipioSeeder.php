<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    public function run()
    {
        Municipio::insert([
            ['nome' => 'Brasília'],
            ['nome' => 'São Paulo'],
            ['nome' => 'Rio de Janeiro']
        ]);
    }
}
