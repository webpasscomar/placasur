<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function (Blueprint $table) {
			$table->id();
			$table->string('nombre');
			$table->text('descripcion');
			$table->string('imagen')->nullable();
			$table->string('video')->nullable();
			$table->string('orden')->default(0);
			$table->tinyInteger('destacar')->default(0);
			$table->tinyInteger('estado')->default(1);
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
		Schema::dropIfExists('productos');
	}
}
