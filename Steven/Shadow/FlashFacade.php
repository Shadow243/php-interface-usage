<?php
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 11:09
 */

namespace Steven\Shadow;

use Illuminate\Support\Facades\Facade;

class FlashFacade extends Facade
{
   protected static function getFacadeAccessor(){ return 'flash'; }
}