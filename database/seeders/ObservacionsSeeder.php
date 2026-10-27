<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Observacion;

class ObservacionesSeeder extends Seeder
{
    public function run(): void
    {
        Observacion::create([
            'tiburon_id'         => 1,
            'fecha'              => '2025-11-01',
            'condiciones_mar'    => 'Agua clara, calma',
            'tipo_avistamiento'  => 'Barco',
            'notas'              => 'Se observo a unos 50 m de profundidad.'
        ]);

        Observacion::create([
            'tiburon_id'         => 2,
            'fecha'              => '2025-10-15',
            'condiciones_mar'    => 'Agitada, oleaje moderado',
            'tipo_avistamiento'  => 'Buceo',
            'notas'              => 'Dos individuos nadando juntos cerca de la superficie.'
        ]);

        Observacion::create([
            'tiburon_id'         => 3,
            'fecha'              => '2025-09-20',
            'condiciones_mar'    => 'Turbia, visibilidad limitada',
            'tipo_avistamiento'  => 'Foto',
            'notas'              => 'Foto capturada desde lancha, identificacion via patron dorsal.'
        ]);
    }
}
