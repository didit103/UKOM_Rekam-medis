<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mediss', function ($table)
		{
			$table->string('kd_tindakan');
			$table->string('kd_obat');
			$table->string('kd_user');
			$table->string('no_pasien');
			$table->string('diagnosa');
			$table->string('keluhan');
			$table->string('tgl_pemeriksaan');
			$table->string('ket');
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
		Schema::drop('mediss');
	}

}
