<?php namespace DeligenceTechnologies\Dtworldclock;

use System\Classes\PluginBase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Schema;
use Db;


class Plugin extends PluginBase
{
    public function registerComponents()
    {    
		   return [
			'DeligenceTechnologies\Dtworldclock\Components\DtWorldclock' => 'worldClock'
		  ];
    }

    public function registerSettings() { }

    public function __construct()
    {
		$this->insertData();
    }

    public function insertData()
    {
      
       $allzones = array(array('id' => '1','values' => 'Pacific/Pago_Pago'),array('id' => '2','values' => 'Pacific/Honolulu'),array('id' => '3','values' => 'America/Anchorage'),array('id' => '4','values' => 'America/Vancouver'),array('id' => '5','values' => 'America/Los_Angeles'),array('id' => '6','values' => 'America/Tijuana'),array('id' => '7','values' => 'America/Edmonton'),array('id' => '8','values' => 'America/Denver'),array('id' => '9','values' => 'America/Phoenix'),array('id' => '10','values' => 'America/Mazatlan'),array('id' => '11','values' => 'America/Winnipeg'),array('id' => '12','values' => 'America/Regina'),array('id' => '13','values' => 'America/Chicago'),array('id' => '14','values' => 'America/Mexico_City'),array('id' => '15','values' => 'America/Guatemala'),array('id' => '16','values' => 'America/El_Salvador'),array('id' => '17','values' => 'America/Managua'),array('id' => '18','values' => 'America/Costa_Rica'),array('id' => '19','values' => 'America/Montreal'),array('id' => '20','values' => 'America/New_York'),array('id' => '21','values' => 'America/Indianapolis'),array('id' => '22','values' => 'America/Panama'),array('id' => '23','values' => 'America/Bogota'),array('id' => '24','values' => 'America/Lima'),array('id' => '25','values' => 'America/Halifax'),array('id' => '26','values' => 'America/Puerto_Rico'),array('id' => '27','values' => 'America/Caracas'),array('id' => '28','values' => 'America/Santiago'),array('id' => '29','values' => 'America/St_Johns'),array('id' => '30','values' => 'America/Sao_Paulo'),array('id' => '31','values' => 'Atlantic/Azores'),array('id' => '32','values' => 'Etc./UTC'),array('id' => '33','values' => 'UTC'),array('id' => '34','values' => 'Atlantic/Reykjavik'),array('id' => '35','values' => 'Europe/Dublin'),array('id' => '36','values' => 'Europe/London'),array('id' => '37','values' => 'Europe/Lisbon'),array('id' => '38','values' => 'Africa/Casablanca'),array('id' => '39','values' => 'Africa/Nouakchott'),array('id' => '40','values' => 'Europe/Oslo'),array('id' => '41','values' => 'Europe/Stockholm'),array('id' => '42','values' => 'Europe/Copenhagen'),array('id' => '43','values' => 'Europe/Berlin'),array('id' => '44','values' => 'Europe/Amsterdam'),array('id' => '45','values' => 'Europe/Brussels'),array('id' => '46','values' => 'Europe/Luxembourg'),array('id' => '47','values' => 'Europe/Paris'),array('id' => '48','values' => 'Europe/Zurich'),array('id' => '49','values' => 'Europe/Madrid'),array('id' => '50','values' => 'Europe/Rome'),array('id' => '51','values' => 'Africa/Algiers'),array('id' => '52','values' => 'Africa/Tunis'),array('id' => '53','values' => 'Europe/Warsaw'),array('id' => '54','values' => 'Europe/Prague'),array('id' => '55','values' => 'Europe/Vienna'),array('id' => '56','values' => 'Europe/Budapest'),array('id' => '57','values' => 'Europe/Sofia'),array('id' => '58','values' => 'Europe/Istanbul'),array('id' => '59','values' => 'Europe/Athens'),array('id' => '60','values' => 'Asia/Nicosia'),array('id' => '61','values' => 'Asia/Beirut'),array('id' => '62','values' => 'Asia/Damascus'),array('id' => '63','values' => 'Asia/Jerusalem'),array('id' => '64','values' => 'Asia/Amman'),array('id' => '65','values' => 'Africa/Tripoli'),array('id' => '66','values' => 'Africa/Cairo'),array('id' => '67','values' => 'Africa/Johannesburg'),array('id' => '68','values' => 'Europe/Moscow'),array('id' => '69','values' => 'Asia/Baghdad'),array('id' => '70','values' => 'Asia/Kuwait'),array('id' => '71','values' => 'Asia/Riyadh'),array('id' => '72','values' => 'Asia/Bahrain'),array('id' => '73','values' => 'Asia/Qatar'),array('id' => '74','values' => 'Asia/Aden'),array('id' => '75','values' => 'Africa/Khartoum'),array('id' => '76','values' => 'Africa/Djibouti'),array('id' => '77','values' => 'Africa/Mogadishu'),array('id' => '78','values' => 'Asia/Dubai'),array('id' => '79','values' => 'Asia/Muscat'),array('id' => '80','values' => 'Asia/Yekaterinburg'),array('id' => '81','values' => 'Asia/Tashkent'),array('id' => '82','values' => 'Asia/Calcutta'),array('id' => '83','values' => 'Asia/Novosibirsk'),array('id' => '84','values' => 'Asia/Almaty'),array('id' => '85','values' => 'Asia/Dacca'),array('id' => '86','values' => 'Asia/Krasnoyarsk'),array('id' => '87','values' => 'Asia/Bangkok'),array('id' => '88','values' => 'Asia/Saigon'),array('id' => '89','values' => 'Asia/Jakarta'),array('id' => '90','values' => 'Asia/Irkutsk'),array('id' => '91','values' => 'Asia/Shanghai'),array('id' => '92','values' => 'Asia/Hong_Kong'),array('id' => '93','values' => 'Asia/Taipei'),array('id' => '94','values' => 'Asia/Kuala_Lumpur'),array('id' => '95','values' => 'Asia/Singapore'),array('id' => '96','values' => 'Australia/Perth'),array('id' => '97','values' => 'Asia/Yakutsk'),array('id' => '98','values' => 'Asia/Seoul'),array('id' => '99','values' => 'Asia/Tokyo'),array('id' => '100','values' => 'Australia/Darwin'),array('id' => '101','values' => 'Australia/Adelaide'),array('id' => '102','values' => 'Asia/Vladivostok'),array('id' => '103','values' => 'Australia/Brisbane'),array('id' => '104','values' => 'Australia/Sydney'),array('id' => '105','values' => 'Australia/Hobart'),array('id' => '106','values' => 'Asia/Magadan'),array('id' => '107','values' => 'Asia/Kamchatka'),array('id' => '108','values' => 'Pacific/Auckland'));
       if(Schema::hasTable('deligence_timezones')) DB::table('deligence_timezones')->insert($allzones); 

    }
}
