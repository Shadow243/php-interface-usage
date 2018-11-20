<?php
/**
 * Created by PhpStorm.
 * User: Steven Ngesera
 * Date: 13/10/2018
 * Time: 10:10
 */

namespace Steven\Shadow;


use Steven\Shadow\Interfaces\SessionInterface;

class Flash
{
    /**
     * @var Session
     */
    private $session;

    const KEY = 'steven_flash';

    public function __construct(SessionInterface $session)
    {

        $this->session = $session;
    }

    public function set($message, $type = 'success')
   {
       $this->session->set(self::KEY, [
           'message' => $message,
           'type' => $type
       ]);
   }

   public function get()
   {
       $flash = $this->session->get(self::KEY);
       $this->session->delete(self::KEY);
       return "<div class='alert alert-{$flash['type']}'>{$flash['message']}</div>";
   }
}