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
        Schema::create('contas_recebers', function (Blueprint $table) {
            $table->id();
            $table->biginteger('numero_duplicata');
            $table->biginteger('numero_pedido');
            $table->dateTime('data_emissao');  
            $table->dateTime('data_baixa');  
            $table->double('valor_duplicata');
            $table->double('valor_baixado');
            $table->double('valor_em_aberto');    
            $table->timestamps();
            $table->integer('plano_conta_id')->unsigned();
            $table->foreign('plano_conta_id')->references('id')->on('plano_contas');
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('pessoa_id');
        $table->dropForeign('plano_conta_id');
        Schema::dropIfExists('contas_recebers');
    }
};
