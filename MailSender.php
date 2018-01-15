<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 14.01.2018
 * Time: 20:52
 */

class MailSender
{
    // The message


    public function sendRegistrationMail($email)
    {
        if($email === false){
            return false;
        }else{
            $subject  = "Registration Web-Draw";
            $headers  = "From: service@webdraw.pl\r\n" ;
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            $message  = "<html><body>";
            $message .= "<H3>Welcome ".$_POST['username']."</H3>";
            $message .= "<h4>ThankYou for register to Web-Draw.</h4>";
            $message .= "</body></html>";
            mail($email, $subject, $message, $headers);
        }
    }
    public function sendPassword($email)
    {
        if($email === false){
            return false;
        }else{
            require_once ('DBConnect.php');
            $sqlPassword = "SELECT password FROM Users WHERE email='".$email."'";
            $sqlName     = "SELECT name FROM Users WHERE email='".$email."'";
            $connect     = new DBConnect("localhost","vexler_draw","password@web-draw");
            if($connect->getConnect()->query($sqlPassword)){
                $password    = $connect->getConnect()->query($sqlPassword);
                $name        = $connect->getConnect()->query($sqlName);
                $connect     ->dbClose();

                $subject     = "Web-Draw Password recovery";
                $headers     = "From: service@webdraw.pl\r\n" ;
                $headers    .= "MIME-Version: 1.0\r\n";
                $headers    .= "Content-Type: text/html; charset=utf-8\r\n";
                $message     = "<html><body>";
                $message    .= "<H3>Welcome ".$name."</H3>";
                $message    .= "<h4>Your Password is '".$password."'.</h4>";
                $message    .= "</body></html>";
                mail($email, $subject, $message, $headers);
            }
        }
    }
}