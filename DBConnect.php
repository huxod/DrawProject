<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 13.01.2018
 * Time: 10:50
 */

class DBConnect
{
   private $info;
   private $connect;
   private $host, $db_name, $db_user, $db_password;

   public function __construct($host, $db_name, $db_user, $db_password)
   {
       $this -> host         = $host;
       $this -> db_name      = $db_name;
       $this -> db_user      = $db_user;
       $this -> db_password  = $db_password;

       $this -> connect = mysqli_connect($this -> host, $this ->db_name, $this -> db_password, $this -> db_name);
           if (!$this -> connect) {
               $this  -> info = "Error: Unable to connect to MySQL." . PHP_EOL;
               exit;
           }else{
               $this -> info = "Host name: ".$host." Database : ".$db_name." Connect Success";
               return true;
           }
   }
   public function getInfo()
   {
       return $this -> info;
   }
   public  function getConnect(){
       return $this -> connect;
   }
    public  function dbClose(){
        $this -> connect -> close();
    }
}