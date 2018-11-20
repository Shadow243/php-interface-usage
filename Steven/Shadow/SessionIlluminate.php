<?php
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 10:40
 */

namespace Steven\Shadow;


use Illuminate\Session\Store;
use Steven\Shadow\Interfaces\SessionInterface;

class SessionIlluminate implements SessionInterface
{
    /**
     * @var Store
     */
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function get($key)
    {
        return $this->session->ge($key);
    }

    public function set($key, $value)
    {
        $this->session->set($key, $value);
    }

    public function delete($key)
    {
        $this->session->forget($key);
    }
}