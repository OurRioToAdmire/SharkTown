<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tracking;

class TrackingsSeeder extends Seeder
{
    public function run(): void
    {
        Tracking::create([
            'tiburon_id'           => 1,
            'tag_id'               => 'TAG‑A1',
            'tipo_tag'             => 'Satélite',
            'fecha_colocado'       => '2025-11-02',
            'coordenadas_max'      => '25.123456,-80.654321',
            'distancia_recorrido'  => 15.25,
            'ultima_profundidad_m' => 450.50,
            'observacion_id'       => 1
        ]);

        Tracking::create([
            'tiburon_id'           => 2,
            'tag_id'               => 'GWS‑T1',
            'tipo_tag'             => 'Acustico',
            'fecha_colocado'       => '2025-10-16',
            'coordenadas_max'      => '-33.865143,151.209900',
            'distancia_recorrido'  => 5.0,
            'ultima_profundidad_m' => 120.00,
            'observacion_id'       => 2
        ]);

        Tracking::create([
            'tiburon_id'           => 3,
            'tag_id'               => 'HAM‑X5',
            'tipo_tag'             => 'Visual',
            'fecha_colocado'       => '2025-09-21',
            'coordenadas_max'      => '10.987654,-85.123456',
            'distancia_recorrido'  => 2.5,
            'ultima_profundidad_m' => 80.75,
            'observacion_id'       => 3
        ]);
    }
}
