<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',60);
            $table->string('matricula',60);
            $table->string('email',60);
            $table->string('telefone',60);
            $table->unsignedBigInteger('boletim_id')->nullable();
            $table->timestamps();
        });
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreign('boletim_id')->references('id')->on('boletims')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
