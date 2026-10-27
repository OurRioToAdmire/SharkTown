<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{

    protected $fillable = [
        'tiburon_id',
        'tag_id',
        'tipo_tag',
        'fecha_colocado',
        'fecha_retirado',
        'coordenadas_max',
        'distancia_recorrido',
        'ultima_profundidad_m',
        'observaciones_id',
    ];

    public function tiburon()
    {
        return $this->belongsTo(Tiburon::class);
    }

    public function observacion()
    {
        return $this->belongsTo(Observacion::class);
    }
}
