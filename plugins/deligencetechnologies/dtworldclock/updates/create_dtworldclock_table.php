<?php namespace DeligenceTechnologies\Dtworldclock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDtworldclockTable extends Migration
{
    public function up()
    {
        Schema::create('deligence_dtworldclock', function($table)
        {
		    $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 50);
            $table->string('status', 10);
            $table->string('time_format', 30);
            $table->string('clock_layout', 30);
            $table->string('display_name', 30);
            $table->string('display_seconds', 30);
			$table->string('leading_zeros', 30);
		    $table->string('display_date', 30);
            $table->string('clock_1', 30);
            $table->string('c1_timezone', 50);
            $table->string('c1_country', 50);
            $table->string('clock_2', 30);
            $table->string('c2_timezone', 50);
            $table->string('c2_country', 50);
            $table->string('clock_3', 30);
            $table->string('c3_timezone', 50);
            $table->string('c3_country', 50);
            $table->string('clock_4', 30);
            $table->string('c4_timezone', 50);
            $table->string('c4_country', 50);
         
        });
		

    }
	
   public function down()
		{
			Schema::dropIfExists('deligence_dtworldclock');
		}
}
