<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$error = '';
	if(!$name) {$error .= 'Enter your name. ';}
	if(!$email) {$error .= 'Enter your email. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Enter your message. ';}
	if(!$error) {
		$address = "contact@luxiuminteriors.com";
		$mes = "Name: ".$name."\n\nMessage: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>