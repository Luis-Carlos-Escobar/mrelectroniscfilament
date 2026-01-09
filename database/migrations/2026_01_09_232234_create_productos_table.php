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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            //relaciones
            $table->foreignId('modelo_id')->constrained('modelos')->onDelete('cascade');
            $table->foreignId('pulgada_id')->constrained('pulgadas')->onDelete('cascade');
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            //Datos del producto
            $table->decimal('precio', 12, 2);
            $table->integer('cantidad');
            $table->string('numero_pieza', 100)->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
