<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao')->nullable;
            $table->timestamps();
        });

        Schema::create('papel_permissao', function (Blueprint $table) {
            $table->integer('permissao_id');
            $table->integer('papel_id');

            $table->foreign('permissao_id')->references('id')->on('permissoes');
            $table->foreign('papel_id')->references('id')->on('papeis');

            $table->primary(['permissao_id','papel_id']);
        });

        Schema::create('papel_user', function (Blueprint $table) {
            $table->integer('papel_id');
            $table->integer('user_id');

            $table->foreign('papel_id')->references('id')->on('papeis');
            $table->foreign('user_id')->references('id')->on('users');

            $table->primary(['papel_id','user_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papel_user');
        Schema::dropIfExists('papel_permissao');
        Schema::dropIfExists('papeis');
    }
}
