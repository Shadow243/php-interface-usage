<?php
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 10:35
 */

namespace Steven\Shadow;

use Illimunate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
   public function register() {
       $this->app->bind('flash', function ($app) {
            return new Flash(new SessionIlluminate($app['session.store']));
       });
   }
}