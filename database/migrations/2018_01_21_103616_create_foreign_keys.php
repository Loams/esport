<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('games', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('game_types')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->foreign('game_id')->references('id')->on('games')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('games', function(Blueprint $table) {
			$table->dropForeign('games_type_id_foreign');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->dropForeign('teams_game_id_foreign');
		});
	}
}