<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goals', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('user_id');
			
			$table->string('goal_title', 50);
			
			$table->text('goal_description', 500);
			
			$table->integer('goal_value');
			
			$table->integer('goal_complete');
			
			$table->string('deletable', 1);
			
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
		Schema::drop('goals');
	}

}
