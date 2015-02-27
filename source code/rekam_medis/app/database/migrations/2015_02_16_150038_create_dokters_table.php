<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dokters', function ($table)
		{
			$table->string('kd_dokter');
			$table->string('kd_poli');
			$table->string('tgl_kunjungan');
			$table->string('kd_user');
			$table->string('nm_dokter');
			$table->string('sip');
			$table->string('tempat_lahir');
			$table->string('no_telp');
			$table->string('alamat');
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
		Schema::drop('dokters');
	}

}
