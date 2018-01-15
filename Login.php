<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 14.01.2018
 * Time: 21:54
 */
require_once ('Confirm.php');
require_once ('DBConnect.php');
class Login
{
    private $userName;
    private $userPassword;
    public function __construct($name, $password){
        $confirm = new Confirm();
        if($confirm->name($name)){
            $this->userName     = $name;
            $this->userPassword = $password;
        }
    }
}