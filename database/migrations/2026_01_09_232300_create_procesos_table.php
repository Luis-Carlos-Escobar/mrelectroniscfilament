<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();

            //relacion con clientes
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');

            //relacion con marcas
            $table->foreignId('marca_id')->constrained('marcas')->onDelete('cascade');

            //relacion con modelos
            $table->foreignId('modelo_id')->constrained('modelos')->onDelete('cascade');

            //relacion con pulgadas
            $table->foreignId('pulgada_id')->constrained('pulgadas')->onDelete('cascade');

            //datos propios de la reparacion
            $table->string('falla', 255);
            $table->text('descripcion')->nullable();

            //estado del proceso
            $table->string('estado')->default('en_revision');
            $table->timestamp('fecha_inicio')->useCurrent();
            $table->timestamp('fecha_cierre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procesos');
    }
};
