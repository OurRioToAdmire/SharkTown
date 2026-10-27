<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{

    protected $fillable = [
        'nombre_comun',
        'nombre_cientifico',
        'habitat',
        'region',
        'profundidad',
        'estado_conservacion',
        'descripcion',
    ];

    public function tiburones()
    {
        return $this->hasMany(Tiburon::class);
    }
}
