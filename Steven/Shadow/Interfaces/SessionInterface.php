<?php
namespace Steven\Shadow\Interfaces;
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 09:41
 */

interface SessionInterface
{
    /**
     * Get a value from storage
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     * Set a value into the storage
     * @param $key
     * @param $value
     * @return mixed
     */
    public function set($key, $value);

    /**
     * Delete a value from storage
     * @param $key
     * @return mixed
     */
    public function delete($key);
}