<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres', 100)->nullable()->comment('nombres persona');
            $table->string('apellidos', 100)->nullable()->comment('apellidos de la persona');
            $table->string('cedula', 25)->nullable()->comment('numero de cedula o pasaporte');
            $table->date('fechanac')->nullable()->comment('fecha de nacimiento');
            $table->string('nacionalidad',50)->nullable()->comment('nacionalidad');
            $table->char('genero', 10)->nullable()->comment('genero');
            $table->string('email', 100)->nullable()->comment('correo');
            $table->string('status', 50)->nullable()->comment('status');
            $table->timestamps();
            
        });

    }

    /**
     * Reverse the migrations.
     *  Schema::create('cd_business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('legal_representative', 80)->nullable()->comment('Nombre del representante legal');
            $table->string('dni_legal_representative', 10)->nullable()->comment('CI del representante legal');
            $table->string('name', 150)->nullable()->comment('Nombre de la empresa');
            $table->string('rif', 12)->nullable()->comment('RIF de la empresa');
            $table->string('fiscal_address', 200)->nullable()->comment('Direccion Fiscal');
            $table->unsignedTinyInteger('cd_state_id')->nullable()->comment('Foranea tabla cd_states');
            $table->unsignedSmallInteger('cd_municipalitie_id')->nullable()->comment('Foranea tabla cd_municipalities');
            $table->unsignedSmallInteger('cd_parishe_id')->nullable()->comment('Foranea tabla cd_parishes');
            $table->string('postal_code', 5)->nullable()->comment('Codigo postal');
            $table->string('geographic_coordinate', 30)->nullable()->comment('Codigo postal');
            $table->json('specialty')->nullable()->comment('Especialidad');
            $table->unsignedInteger('user_id')->comment('Foranea tabla users');
            $table->unsignedTinyInteger('cd_types_of_activitie_id')->comment('foranea table cd_types_of_activities');
            $table->string('correlative', 12)->comment('Correlativo');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cd_state_id')->references('id')->on('cd_states');
            $table->foreign('cd_municipalitie_id')->references('id')->on('cd_municipalities');
            $table->foreign('cd_parishe_id')->references('id')->on('cd_parishes');
            $table->foreign('cd_types_of_activitie_id')->references('id')->on('cd_types_of_activities');
        });
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
