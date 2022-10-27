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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_emissao');     
            $table->boolval('is_actived');
            $table->timestamps();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('pessoas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('cliente_id');

        Schema::dropIfExists('pedidos');
    }
};
