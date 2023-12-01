<?php
if(!$_POST && $_POST['miel']!="")exit;
include("./SMTP/class.phpmailer.php");
include("./SMTP/class.smtp.php");
include("./connect.php");
date_default_timezone_set( "America/New_York" );
$name= $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$comments = $_POST['comments'];
$date=date("m/d/y  h:i:s");

$sql="INSERT INTO `contacts`(
    `NAME`,
     `EMAIL`,
      `PHONE`,
       `COMMENT`,
        `DATE`) VALUES ( :NAME,
     :EMAIL,
      :PHONE,
       :COMMENT,
        :DATE )";
$response=$cnt->prepare($sql);
$response->execute(array(":NAME"=>$name, ":EMAIL"=>$email,":PHONE"=>$phone, ":COMMENT"=>$comments, ":DATE"=>$date));

$message = "<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>CONFIRMACIÓN DE CONTACTO</title>
	<style>
		*{
			margin: auto;
			text-align: center;
		}
	</style>
</head>
<body>
<div style='width: 100%; height: 100%; background: white;margin:auto;text-align:center'>
	<table style='background: white; width: 650px;margin: auto; font-family: Arial, sans-serif;font-size: 14px;' cellpadding='0' cellspacing='0'>
		<tbody style='text-align:left!important'>
			<tr><td colspan='3'>
	<img src='https://" . $_SERVER[ 'HTTP_HOST' ] . "/assets/img/mail/header-mail.png' style='width: 650px' height='300px'>
				</td></tr>
			<tr style='height: 30px;'><td></td><td></td><td></td></tr>
			<tr><td style='width: 50px;'></td>
				<td>
				<h3 style='color:#123262; text-align: left!important; padding: 20px 0px'>Dear ".$name."</h3>
					<p style='text-align: left!important; color: #000;font-size:18px;'> Join us at Cosmyxx to fuel your start-up's growth. With our
                    expertise and your passion, the cosmos is the limit.<br /><br />
                    Let's embark on this exciting journey together. Contact us today
                    to explore your funding opportunities.<br><br>
					
			<br><br>
            Best regards</p></td>	
<td style='width: 50px;'></td></tr>			
		<tr><td colspan='3'><img src='https://" . $_SERVER[ 'HTTP_HOST' ] . "/assets/img/mail/footer-mail.png' width='650px' height='200px'></td></tr>
		</tbody>
	</table>
</div>
</body>
</html>";

$email_user = "ernesto@a0solutions.com";
$email_password = "6!/%BwQq75cqzc8";
$from_name = "COSMYXX & CO.";

$phpmailer2 = new PHPMailer();
// ———- datos de la cuenta de Gmail ——————————-
$phpmailer2->Username = $email_user;
$phpmailer2->Password = $email_password;
//———————————————————————–
// $phpmailer->SMTPDebug = 1;
$phpmailer2->SMTPSecure = 'tls';
$phpmailer2->Host = "smtp.ionos.es"; // GMail
$phpmailer2->Port = 587;
$phpmailer2->IsSMTP(); // use SMTP
$phpmailer2->SMTPAuth = true;

$phpmailer2->setFrom( $phpmailer2->Username, $from_name );
$phpmailer2->AddAddress( $email ); 
$phpmailer2->CharSet = "UTF-8";
$phpmailer2->Subject = 'Website Contact';
$phpmailer2->Body .= $message;
$phpmailer2->IsHTML( true );
$phpmailer2->Send();

echo 200;
?>