<?php


$ime = $_REQUEST['fname'];
        
 $pitanje = $_REQUEST['pitanje'];
 echo $pitanje;

echo "HVALA KORISNIČE $ime NA INTERESOVANJU! Uskoro Vam stiže odogovor.";


require '..\PHPMailer\PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->Host ="smtp.gmail.com";

$mail->isSMTP();

$mail->SMTPAuth = true;

$mail->Username = "pop.anja@gmail.com";
$mail->Password = "srecasrecaradost123";

$mail->SMTPSecure = "tls";

$mail->Port = 587;

$mail->Subject = "Nova poruka sa sajta BLOK 22 od". ''.$_REQUEST['fname'];

$mail->Body = $_REQUEST['fname'].' '.$_REQUEST['lname'].' '.$_REQUEST['pitanje'].' '.$_REQUEST['subject'];

//$mail->Body = 'test';

$mail->setFrom('pop.anja@gmail.com');

$mail->addReplyTo('pop.anja@gmail.com');

$mail->addAddress('pop.anja@gmail.com');

if ($mail->send()) {
    echo 'Mail is sent';
}
else {
    echo 'Not sent';
};


        
       


