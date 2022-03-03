<?php

class auth
{
    public $log;
    public $pas;
    public function __construct($log, $pas)
    {
        $this->log=$log;
        $this->pas=$pas;
    }
    public function login()
    {
        $link = mysqli_connect('localhost', 'Dmitry', '112211', 'login');
        $qr = mysqli_query($link, "SELECT * FROM logp");
        $res = mysqli_fetch_assoc($qr);
        if ($this->log == $res['login'] && $this->pas == $res['pas']){
            return true;
        }
    }
}