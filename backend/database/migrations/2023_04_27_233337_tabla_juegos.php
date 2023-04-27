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
            $table->string('nombre')->nullable(false);
            $table->string('genero')->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->unsignedSmallInteger('ano_publicacion')->nullable(false);
            $table->unsignedBigInteger('desarrolladora_id')->nullable(false);
            $table->foreignIdFor('');
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
