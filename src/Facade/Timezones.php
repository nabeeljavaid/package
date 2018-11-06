<?php namespace Nabeeljavaid\Timezones\Facade;
 
use Illuminate\Support\Facades\Facade;
 
class Timezones extends Facade {
 
    protected static function getFacadeAccessor() { return 'Nabeeljavaid\Timezones\Timezones'; }
 
}