<?php namespace AlexeyMezenin\LaravelGmtTimezones\Facades;

use Illuminate\Support\Facades\Facade;

class Timezone extends Facade {
	public static function getFacadeAccessor()
	{
		return 'timezone';
	}
}