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
        Schema::create('detalhes_pedidos', function (Blueprint $table) {
            $table->id();
            $table->double("quantidade");
            $table->double("valor_unitario");  
            $table->double("valor_total");  
            $table->timestamps();
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('produto_id');
        $table->dropForeign('pedido_id');
        Schema::dropIfExists('detalhes_pedidos');
    }
};
