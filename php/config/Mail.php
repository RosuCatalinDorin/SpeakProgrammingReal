<?php
/**
 * Created by PhpStorm.
 * User: catalin.rosu
 * Date: 19/03/2019
 * Time: 9:54 AM
 */
require '../PHPMailer/phpmailer/PHPMailerAutoload.php';

class Mail {
   public $mail;
   public function connectMail() {
       $mail = new PHPMailer();
       $mail->isSMTP();
<<<<<<< HEAD
       $mail->Host = 'smtp.hostinger.ro';
       $mail->Port = 587;
       $mail->SMTPAuth = true;
       $mail->Username = 'contact@speakprogramming.ro';
       $mail->Password = 'r2RkyY48kSQSXBh';
       $mail->setFrom("contact@speakprogramming.ro", "Speak Programming");
=======
       $mail->Host = '';
       $mail->Port = 587;
       $mail->SMTPAuth = true;
       $mail->Username = '';
       $mail->Password = '';
       $mail->setFrom("", "Speak Programming");
>>>>>>> 553062b3b1ec686d97061d4c1e7abbc7a906fb34
       return $mail;
   }
}
