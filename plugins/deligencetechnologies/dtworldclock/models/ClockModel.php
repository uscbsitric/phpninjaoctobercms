<?php namespace DeligenceTechnologies\Dtworldclock\Models;

use Model;
use Db;

/**
 * Model
 */
class ClockModel extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'deligence_dtworldclock';

    public function getTimezones()
    {
      $data = Db::table('deligence_timezones')->get();
       foreach($data as $v)
       {  
			$zones[ $v->values ] = $v->values;
       } 
	   return $zones;
    }

    public function getC1TimezoneOptions() 
    {
       return $this->getTimezones();
    }

    public function getC2TimezoneOptions() 
    {
       return $this->getTimezones();
    }

    public function getC3TimezoneOptions() 
    {
       return $this->getTimezones();
    }

    public function getC4TimezoneOptions() 
    {
       return $this->getTimezones();
    }


}