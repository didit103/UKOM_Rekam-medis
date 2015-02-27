<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunjungansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kunjungans', function ($table)
		{
			$table->string('tgl_kunjungan');
			$table->string('kd_pasien');
			$table->string('kd_poli');
			$table->string('jam_kunjungan');
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
		Schema::drop('kunjungans');
	}

}
