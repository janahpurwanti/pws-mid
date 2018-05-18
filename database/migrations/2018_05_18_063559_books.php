<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('kode');
			$table->string('judul','100');
			$table->string('pengarang','50');
			$table->string('penerbit','50');
			$table->string('info','50');
			$table->integer('id');
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
        Schema::create('books', function (Blueprint $table) {
		});
    }
}
