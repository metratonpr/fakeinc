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
        Schema::create('contas_pagars', function (Blueprint $table) {
            $table->id();
            $table->biginteger('numero_duplicata');
            $table->biginteger('numero_pedido');
            $table->dateTime('data_emissao');  
            $table->dateTime('data_baixa');  
            $table->double('valor_duplicata');
            $table->double('valor_baixado');
            $table->double('valor_em_aberto');            
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
        Schema::dropIfExists('contas_pagars');
    }
};
