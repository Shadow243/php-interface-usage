<?php
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 10:20
 */

namespace Steven\Shadow;


use Steven\Shadow\Interfaces\SessionInterface;

class Cookie implements SessionInterface
{

    /**
     * Get a value from storage
     * @param string $key
     * @return mixed|null
     */
    public function get($key)
    {
       return isset($_COOKIE[$key]) ? unserialize($_COOKIE[$key]) : null;
    }

    /**
     * set a value into the storage
     * @param string $key
     * @param $value
     */
    public function set($key, $value)
    {
       setcookie($key, serialize($value));
    }

    /**
     * Delete a value from storage
     * @param  string $key
     * @return mixed
     */
    public function delete($key)
    {
        if(isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, '', time() - 3600);
        }
    }
}