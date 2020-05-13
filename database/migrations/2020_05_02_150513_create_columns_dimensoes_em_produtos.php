<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsDimensoesEmProdutos extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('produtos', function ($table){
            $table->double('altura',10,2)->nullable(false);
            $table->double('largura',10,2)->nullable(false);
            $table->double('profundidade',10,2)->nullable(false);
            $table->double('peso',10,2)->nullable(false);
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
