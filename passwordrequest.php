<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 14.01.2018
 * Time: 21:30
 */
require_once ('Confirm.php');
require_once ('MailSender.php');
$confirm = new Confirm();
if((!empty($_POST('email')))&&($confirm->email($_POST('email')))){
    echo $_POST('email');
}else{
    echo "Coś poszło nie tak";
}
?>