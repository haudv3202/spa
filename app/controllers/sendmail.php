<?php
namespace App\controllers;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
class sendmail
{
    protected $mail;
    public function Send_email($title, $content, $email)
    {
        $this->mail = new PHPMailer(true);

        try {
            //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $this->mail->Username = 'dhau322002@gmail.com';                     //SMTP username
            $this->mail->Password = 'xkdloklsuahuvory';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('no-reply@monospa.com', 'MONOSPA SERVICE');
            $this->mail->addAddress($email);     //Add a recipient


            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = $title;
            $this->mail->Body = $content;

//            return $content;
            $this->mail->send();
//    echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }

    }
}
