<?php namespace AlexeyMezenin\LaravelGmtTimezones;

use DateTime;
use DateTimeZone;

class Timezone {

	public $timezoneList = [
		'(GMT-11:00) Midway Island, Samoa' => 'Pacific/Midway',
		'(GMT-10:00) Hawaii-Aleutian' => 'America/Adak',
		'(GMT-10:00) Hawaii' => 'Etc/GMT+10',
		'(GMT-09:30) Marquesas Islands' => 'Pacific/Marquesas',
		'(GMT-09:00) Gambier Islands' => 'Pacific/Gambier',
		'(GMT-09:00) Alaska' => 'America/Anchorage',
		'(GMT-08:00) Tijuana, Baja California' => 'America/Ensenada',
		'(GMT-08:00) Pitcairn Islands' => 'Etc/GMT+8',
		'(GMT-08:00) Pacific Time (US & Canada)' => 'America/Los_Angeles',
		'(GMT-07:00) Mountain Time (US & Canada)' => 'America/Denver',
		'(GMT-07:00) Chihuahua, La Paz, Mazatlan' => 'America/Chihuahua',
		'(GMT-07:00) Arizona' => 'America/Dawson_Creek',
		'(GMT-06:00) Saskatchewan, Central America' => 'America/Belize',
		'(GMT-06:00) Guadalajara, Mexico City, Monterrey' => 'America/Cancun',
		'(GMT-06:00) Easter Island' => 'Chile/EasterIsland',
		'(GMT-06:00) Central Time (US & Canada)' => 'America/Chicago',
		'(GMT-05:00) Eastern Time (US & Canada)' => 'America/New_York',
		'(GMT-05:00) Cuba' => 'America/Havana',
		'(GMT-05:00) Bogota, Lima, Quito, Rio Branco' => 'America/Bogota',
		'(GMT-04:30) Caracas' => 'America/Caracas',
		'(GMT-04:00) Santiago' => 'America/Santiago',
		'(GMT-04:00) La Paz' => 'America/La_Paz',
		'(GMT-04:00) Faukland Islands' => 'Atlantic/Stanley',
		'(GMT-04:00) Brazil' => 'America/Campo_Grande',
		'(GMT-04:00) Atlantic Time (Goose Bay)' => 'America/Goose_Bay',
		'(GMT-04:00) Atlantic Time (Canada)' => 'America/Glace_Bay',
		'(GMT-03:30) Newfoundland' => 'America/St_Johns',
		'(GMT-03:00) UTC-3' => 'America/Araguaina',
		'(GMT-03:00) Montevideo' => 'America/Montevideo',
		'(GMT-03:00) Miquelon, St. Pierre' => 'America/Miquelon',
		'(GMT-03:00) Greenland' => 'America/Godthab',
		'(GMT-03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
		'(GMT-03:00) Brasilia' => 'America/Sao_Paulo',
		'(GMT-02:00) Mid-Atlantic' => 'America/Noronha',
		'(GMT-01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
		'(GMT-01:00) Azores' => 'Atlantic/Azores',
		'(GMT) Greenwich Mean Time, Belfast' => 'Europe/Belfast',
		'(GMT) Greenwich Mean Time, Dublin' => 'Europe/Dublin',
		'(GMT) Greenwich Mean Time, Lisbon' => 'Europe/Lisbon',
		'(GMT) Greenwich Mean Time, London' => 'Europe/London',
		'(GMT) Monrovia, Reykjavik' => 'Africa/Abidjan',
		'(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna' => 'Europe/Amsterdam',
		'(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague' => 'Europe/Belgrade',
		'(GMT+01:00) Brussels, Copenhagen, Madrid, Paris' => 'Europe/Brussels',
		'(GMT+01:00) West Central Africa' => 'Africa/Algiers',
		'(GMT+01:00) Windhoek' => 'Africa/Windhoek',
		'(GMT+02:00) Beirut' => 'Asia/Beirut',
		'(GMT+02:00) Cairo' => 'Africa/Cairo',
		'(GMT+02:00) Gaza' => 'Asia/Gaza',
		'(GMT+02:00) Harare, Pretoria' => 'Asia/Jerusalem',
		'(GMT+02:00) Minsk' => 'Europe/Minsk',
		'(GMT+02:00) Syria' => 'Asia/Damascus',
		'(GMT+03:00) Moscow, St. Petersburg, Volgograd' => 'Europe/Moscow',
		'(GMT+03:00) Nairobi' => 'Africa/Addis_Ababa',
		'(GMT+03:30) Tehran' => 'Asia/Tehran',
		'(GMT+04:00) Abu Dhabi, Muscat' => 'Asia/Dubai',
		'(GMT+04:00) Yerevan' => 'Asia/Yerevan',
		'(GMT+04:30) Kabul' => 'Asia/Kabul',
		'(GMT+05:00) Ekaterinburg' => 'Asia/Yekaterinburg',
		'(GMT+05:00) Tashkent' => 'Asia/Tashkent',
		'(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi' => 'Asia/Kolkata',
		'(GMT+05:45) Kathmandu' => 'Asia/Katmandu',
		'(GMT+06:00) Astana, Dhaka' => 'Asia/Dhaka',
		'(GMT+06:00) Novosibirsk' => 'Asia/Novosibirsk',
		'(GMT+06:30) Yangon (Rangoon)' => 'Asia/Rangoon',
		'(GMT+07:00) Bangkok, Hanoi, Jakarta' => 'Asia/Bangkok',
		'(GMT+07:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
		'(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi' => 'Asia/Hong_Kong',
		'(GMT+08:00) Irkutsk, Ulaan Bataar' => 'Asia/Irkutsk',
		'(GMT+08:00) Perth' => 'Australia/Perth',
		'(GMT+08:45) Eucla' => 'Australia/Eucla',
		'(GMT+09:00) Osaka, Sapporo, Tokyo' => 'Asia/Tokyo',
		'(GMT+09:00) Seoul' => 'Asia/Seoul',
		'(GMT+09:00) Yakutsk' => 'Asia/Yakutsk',
		'(GMT+09:30) Adelaide' => 'Australia/Adelaide',
		'(GMT+09:30) Darwin' => 'Australia/Darwin',
		'(GMT+10:00) Brisbane' => 'Australia/Brisbane',
		'(GMT+10:00) Hobart' => 'Australia/Hobart',
		'(GMT+10:00) Vladivostok' => 'Asia/Vladivostok',
		'(GMT+10:30) Lord Howe Island' => 'Australia/Lord_Howe',
		'(GMT+11:00) Solomon Is., New Caledonia' => 'Etc/GMT-11',
		'(GMT+11:00) Magadan' => 'Asia/Magadan',
		'(GMT+11:30) Norfolk Island' => 'Pacific/Norfolk',
		'(GMT+12:00) Anadyr, Kamchatka' => 'Asia/Anadyr',
		'(GMT+12:00) Auckland, Wellington' => 'Pacific/Auckland',
		'(GMT+12:00) Fiji, Kamchatka, Marshall Is.' => 'Etc/GMT-12',
		'(GMT+12:45) Chatham Islands' => 'Pacific/Chatham',
		'(GMT+13:00) Nuku\'alofa' => 'Pacific/Tongatapu',
		'(GMT+14:00) Kiritimati' => 'Pacific/Kiritimati'
];


	/**
	 * @return array
     */
	public function getTimezones()
    {
        return $this->timezoneList;
    }

	/**
	 * @param null $selected
	 * @param null $placeholder
	 * @param array $selectAttributes
	 * @param array $optionAttributes
	 *
	 * @return string
     */
	public function selectForm($selected = null, $placeholder = null, array $selectAttributes = [], array $optionAttributes = [] )
	{
		$selectAttributesString = '';
		foreach ($selectAttributes as $key => $value)
		{
			$selectAttributesString = $selectAttributesString . " " . $key . "='" . $value ."'";
		}

		$optionAttributesString = '';
		foreach ($optionAttributes as $key => $value)
		{
			$optionAttributesString = $optionAttributesString . " " . $key . "='" . $value ."'";
		}

		$string = "<select". $selectAttributesString .">\n";

		if (isset($placeholder) && (empty($selected)))
		{
		     $placeholder = "<option value='' disabled selected>{$placeholder}</option>";
		}
		else
		{
		      $placeholder = null;
		}

		$string = $string . $placeholder;
		foreach ($this->timezoneList as $key => $value)
		{
			if ($selected == $value) {
				$selectedString = "selected='" . $value . "'";
			} else {
				$selectedString = '';
			}

			$string = $string . "<option value='" . $value . "'" . $optionAttributesString . " " . $selectedString . ">" . $key . "</option>\n";
		}
		$string = $string . "</select>";

		return $string;
	}

	/**
	 * @param integer $timestamp
	 * @param string $timezone
	 * @param string $format
	 *
	 * @return string
     */
	public function convertFromGMT($timestamp, $timezone, $format = 'Y-m-d H:i:s')
	{
        $date = new DateTime($timestamp, new DateTimeZone('GMT'));

        $date->setTimezone(new DateTimeZone($timezone));

        return $date->format($format);
    }

	/**
	 * @param integer $timestamp
	 * @param string $timezone
	 * @param string $format
	 *
	 * @return string
     */
	public function convertToGMT($timestamp, $timezone, $format = 'Y-m-d H:i:s')
    {
    	$date = new DateTime($timestamp, new DateTimeZone($timezone));

        $date->setTimezone(new DateTimeZone('GMT'));

        return $date->format($format);
    }

}
