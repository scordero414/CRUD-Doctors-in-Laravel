<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            // $table->string('statement')->default("Qué principio se estaría violando en el siguiente diagrama de clases, si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que ellos no utilizan:");
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->string('answer5');
            $table->string('answer6');
            $table->string('answer7');
            $table->string('answer8');
            $table->string('answer9');
            $table->string('answer10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('questions');
    }
}
