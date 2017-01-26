<?php
namespace DeligenceTechnologies\dtworldclock\Components;
use DeligenceTechnologies\Dtworldclock\Models\ClockModel;
use Db;

class Dtworldclock extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'DtWorld Clock',
            'description' => 'Display a world clocks.'
        ];
    }

   function getData()
		{
			$data = Db::table('deligence_dtworldclock')->first();
            $this->addCss('assets/css/clock_style.css');
            return $data;
	    }
		
    public function getCountry()
	{
		 $clocks = $this->getData();
		 $clock = array();
		 $clock[1]= array('country'=>$clocks->c1_country,'show'=>$clocks->clock_1);
		 $clock[2]= array('country'=>$clocks->c2_country,'show'=>$clocks->clock_2);
		 $clock[3]= array('country'=>$clocks->c3_country,'show'=>$clocks->clock_3);
		 $clock[4]= array('country'=>$clocks->c4_country,'show'=>$clocks->clock_4);
		 return $clock; 
	}
	
    public function getTime1()
    {
        $timer = $this->getData();
		$timezone =  $timer->c1_timezone; 
		$res = @date_default_timezone_set($timezone);
        if($res) { $time=date("F d, Y H:i:s");
        return $time; }
    }
	
	public function getTime2()
    {
		$timer = $this->getData();
		$timezone =  $timer->c2_timezone;
		$res = @date_default_timezone_set($timezone);
        if($res) { $time=date("F d, Y H:i:s");
        return $time; }
    }
	
	public function getTime3()
    {
		$timer = $this->getData();
		$timezone =  $timer->c3_timezone;
		$res = @date_default_timezone_set($timezone);
        if($res) { $time=date("F d, Y H:i:s");
        return $time; }
    }
	
   public function getTime4()
    {
		$timer = $this->getData();
		$timezone =  $timer->c4_timezone;
		$res = @date_default_timezone_set($timezone);
        if($res) { $time=date("F d, Y H:i:s");
        return $time; }	
    }
	
    public function getParams()
     {
        $obj = new ClockModel();
        return $obj->all();
     }
}

?>