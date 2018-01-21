<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	public function up()
	{
		Schema::create('games', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('type_id')->unsigned();
			$table->integer('max_player_per_team');
			$table->integer('max_player_reserve');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('games');
	}
}