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
        Schema::create('computadores', function (Blueprint $table) {
            $table->bigIncrements('idComputador');
            $table->unsignedBigInteger('personas_idPersona');
            $table->string('marcaPc');
            $table->string('modeloPc');
            $table->bigInteger('serialPc');
            $table->timestamp('fechaHoraEntrada')->default(now());
            $table->timestamp('fechaHoraSalida',false)->nullable();

            $table->foreign('personas_idPersona')->references('idPersona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadores');
    }
};
