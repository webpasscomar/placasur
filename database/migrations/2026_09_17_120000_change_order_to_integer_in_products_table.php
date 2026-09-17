<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
		// Normalizamos los valores no numéricos antes de cambiar el tipo
		DB::table('products')
			->whereNull('order')
			->orWhere('order', '')
			->update(['order' => 0]);

		Schema::table('products', function (Blueprint $table) {
			$table->integer('order')->default(0)->change();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function (Blueprint $table) {
			$table->string('order')->default(0)->change();
		});
	}
};
