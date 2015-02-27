<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obats', function ($table)
		{
			$table->string('kd_obat');
			$table->string('nm_obat');
			$table->string('jml_obat');
			$table->string('ukuran');
			$table->string('harga');
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
		Schema::drop('obats');
	}

}
