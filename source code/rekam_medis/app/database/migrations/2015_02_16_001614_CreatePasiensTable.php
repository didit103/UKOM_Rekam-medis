<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pasiens', function(Blueprint $table)
		{
            $table->integer('no_pasien');
            $table->string('nm_pasien');
            $table->string('j_kel');
            $table->string('agama');
            $table->string('alamat');
            $table->string('tgl_lhr')
            $table->string('usia');
            $table->string('no_telp');
            $table->string('nm_kk');
            $table->string('hub_kel');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pasiens');
	}

}
