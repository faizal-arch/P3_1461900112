<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Store extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::store('pasien', function (Blueprint $table) {
		$table->increments('id');
		$table->string('nama', 50);
		$table->string('alamat', 255);
		});
}
	
    /**
     * Reverse the migrations.
     *
     * @return void
     */
	 
    public function down()
    {
        Schema::dropIfExists('pasien');

    }
}
