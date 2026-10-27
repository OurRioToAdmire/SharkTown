<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiburon extends Model
{

    protected $fillable = [
        'nombre',
        'especie_id',
        'largo_m',
        'peso_kg',
        'notas',
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}
