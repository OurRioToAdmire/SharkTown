<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tiburon_id')
                  ->constrained('tiburons')
                  ->onDelete('cascade');
            $table->string('tag_id')->nullable();
            $table->string('tipo_tag')->nullable();
            $table->date('fecha_colocado')->nullable();
            $table->date('fecha_retirado')->nullable();
            $table->string('coordenadas_max')->nullable();
            $table->decimal('distancia_recorrido', 8, 2)->nullable();
            $table->decimal('ultima_profundidad_m', 6, 2)->nullable();
            $table->foreignId('observacion_id')->nullable()
                  ->constrained('observacions')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};

