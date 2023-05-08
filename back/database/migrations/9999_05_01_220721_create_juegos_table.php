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
            $table->unsignedBigInteger('desarrolladora_id')->nullable();
            $table->unsignedBigInteger('grupotraduccion_id')->nullable();
            $table->foreign('desarrolladora_id')->references('id')->on('desarrolladora')->nullOnDelete();
            $table->foreign('grupotraduccion_id')->references('id')->on('grupotraduccions')->nullOnDelete();
            /*
            $table->foreignIdFor(Desarrolladora::class)->nullable()->nullOnDelete();
            $table->foreignIdFor(grupotraduccion::class)->nullable()->nullOnDelete();
            */
            $table->timestamps();/*
            $table->foreign('desarrolladora_id')->references('id')->on('desarrolladora');
            $table->foreign('grupotraduccion_id')->references('id')->on('grupotraduccions');*/
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
