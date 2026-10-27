<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('observacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tiburon_id')
                  ->constrained('tiburons')
                  ->onDelete('cascade');
            $table->date('fecha')->nullable();
            $table->string('condiciones_mar')->nullable();
            $table->string('tipo_avistamiento')->nullable();
            $table->text('notas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('observacions');
    }
};
