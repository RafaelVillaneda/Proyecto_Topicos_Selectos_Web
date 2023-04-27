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
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('genero');
            $table->text('descripcion');
            $table->unsignedSmallInteger('ano_publicacion');
            $table->unsignedBigInteger('desarrolladora_id')->nullable();
            $table->foreign('desarrolladora_id')->references('id')->on('desarrolladoras');
            $table->string('grupo_traduccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
