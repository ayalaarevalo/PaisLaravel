<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('neighborhood_id')->unsigned();
			$table->string('name', 50);
			$table->string('surname', 50);
			$table->string('document', 10)->unique();
			$table->string('celullar', 10);
			$table->string('phone', 10);
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('neighborhood_id')
				  ->references('id')
				  ->on('neighborhoods')
				  ->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('members');
	}

}
