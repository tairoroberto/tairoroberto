<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenascerPedidoSexta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renascerPedidoSexta', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome_fornecedor');
			$table->string('nome_produto');
			$table->integer('quantidadeSexta');
			$table->string('tipoSexta');
			$table->string('dataPedido');
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
		Schema::drop('renascerPedidoSexta');
	}

}
