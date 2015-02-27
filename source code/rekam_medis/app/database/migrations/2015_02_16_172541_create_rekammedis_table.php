<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekammedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekammedias', function ($table)
		{
			$table->string('no_rm');
			$table->string('kd_tindakan');
			$table->string('kd_obat');
			$table->text('kd_user');
			$table->string('no_pasien');
			$table->string('diagnosa');
			$table->string('resep');
			$table->text('keluhan');
			$table->string('tgl_pemeriksaan');
			$table->text('ket');
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
		Schema::drop('rekammedias');
	}

}
