<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tiburon;

class TiburonsSeeder extends Seeder
{
    public function run(): void
    {
        Tiburon::create([
            'nombre'        => 'Markos',
            'especie_id'    => 1,
            'largo_m'       => 2.50,
            'peso_kg'       => 120.00,
            'notas'         => 'Ejemplar juvenil observado en mar abierto.'
        ]);

        Tiburon::create([
            'nombre'        => 'El Gran Blanco',
            'especie_id'    => 2,
            'largo_m'       => 4.30,
            'peso_kg'       => 680.50,
            'notas'         => 'Adulto, probablemente hembra, avistamiento cercano a costa.'
        ]);

        Tiburon::create([
            'nombre'        => 'Martell',
            'especie_id'    => 3,
            'largo_m'       => 3.10,
            'peso_kg'       => 350.75,
            'notas'         => 'Talla media, postura tranquila.'
        ]);
    }
}
