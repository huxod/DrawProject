<?php
require_once('Register.php');
require_once('Confirm.php');
require_once ('MailSender.php');
$confirm = new Confirm();
$send = new MailSender();

if (empty($_POST['username'])&&empty($_POST['email'])&&empty($_POST['password'])){
    echo "Email Name: is empty";

}else{
    echo "Email Name: ".$confirm->email($_POST['email']);
    $send->sendRegistrationMail($confirm->email($_POST['email']));
}

?>


