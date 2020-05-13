<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('produtos', function (Blueprint $table){
            $table->increments('id')->nullable(false)->unsigned();
            $table->string('nome')->nullable(false);
            $table->longText('descricao')->nullable(false);
            $table->integer('quantidade')->nullable(false);
            $table->double('valor',10,2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
