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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");            
            $table->timestamps();
            $table->integer('grupo_produto_id')->unsigned();
            $table->foreign('grupo_produto_id')->references('id')->on('grupo_produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('grupo_produto_id');
        Schema::dropIfExists('produtos');
    }
};
