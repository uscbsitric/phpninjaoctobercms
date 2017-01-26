<?php namespace DeligenceTechnologies\Dtworldclock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTimezoneTable extends Migration
{
    public function up()
    {
        Schema::create('deligence_timezones', function($table)
        {
		   $table->engine = 'InnoDB';
		   $table->integer('id');
		   $table->string('values', 70);
        });
    }
	
   public function down()
		{
			Schema::dropIfExists('deligence_timezones');
		}
}
