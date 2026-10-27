<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especie;

class EspeciesSeeder extends Seeder
{
    public function run(): void
    {
        Especie::create([
            'nombre_comun'         => 'Mako Shark',
            'nombre_cientifico'    => 'Isurus oxyrinchus',
            'habitat'              => 'Océano Atlántico y Pacífico',
            'region'               => 'Atlántico Norte',
            'profundidad'          => '0-500 m',
            'estado_conservacion'  => 'Vulnerable',
            'descripcion'          => 'Tiburón rápido, cuerpo hidrodinámico.'
        ]);

        Especie::create([
            'nombre_comun'         => 'Great White Shark',
            'nombre_cientifico'    => 'Carcharodon carcharias',
            'habitat'              => 'Océanos templados y subtropicales',
            'region'               => 'Pacífico Sur',
            'profundidad'          => '0-1200 m',
            'estado_conservacion'  => 'Vulnerable',
            'descripcion'          => 'Tiburón de gran tamaño, depredador ápice.'
        ]);

        Especie::create([
            'nombre_comun'         => 'Hammerhead Shark',
            'nombre_cientifico'    => 'Sphyrna mokarran',
            'habitat'              => 'Aguas costeras tropicales',
            'region'               => 'Indo-Pacífico',
            'profundidad'          => '0-300 m',
            'estado_conservacion'  => 'En Peligro',
            'descripcion'          => 'Cabeza en forma de martillo, visión amplia.'
        ]);
    }
}
