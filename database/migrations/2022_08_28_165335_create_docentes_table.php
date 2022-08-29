<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
           
            $table->string('nombre');
            $table->string('apellidos');
            $table->text('tituloUniversitario');
            $table->integer('edad');
            $table->text('fecha_contrato');
            $table->text('fotoPerfil');
            $table->string('doc_identidad');
            $table->unsignedBigInteger('id_materia');
            $table->timestamps();

            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
