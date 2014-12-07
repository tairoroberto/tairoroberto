<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenascerPedidoSegunda extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renascerPedidoSegunda', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome_fornecedor');
			$table->string('nome_produto');
			$table->integer('quantidadeSegunda');
			$table->string('tipoSegunda');
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
		Schema::drop('renascerPedidoSegunda');
	}

}
