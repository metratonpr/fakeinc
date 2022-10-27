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
        Schema::create('detalhe_compras', function (Blueprint $table) {
            $table->id();
            $table->double("quantidade");
            $table->double("valor_unitario");  
            $table->double("valor_total");
            $table->timestamps();
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras');
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
        $table->dropForeign('compra_id');
        Schema::dropIfExists('detalhe_compras');
    }
};
