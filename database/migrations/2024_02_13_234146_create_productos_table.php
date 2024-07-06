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
            $table->string('imagen')->nullable();
            $table->string('nombre', 30);
            $table->string('carbohidratos', 8);
            $table->string('proteinas', 8);
            $table->string('grasas', 8);
            $table->string('calorias', 8);
            $table->string('contenido', 8);
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
