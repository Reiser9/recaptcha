<?php
// Проверим гугл каптчу, отправим POST запрос гуглу и получим результат
$gipadress=$_SERVER['REMOTE_ADDR'];
$grecaptcha=$_POST['g-recaptcha-response']; 
$postdata = http_build_query(
	array(
		'secret' => '6LdjkLkUAAAAAPlFWquCg529q3_Mq5R2mDm9rdi2',
		'response' => $grecaptcha,
		'remoteip' => $gipadress
	)
);
$opts = array('http' =>
	array(
		'method'  => 'POST',
		'header'  => 'Content-type: application/x-www-form-urlencoded',
		'content' => $postdata
	)
);


$gcontents = stream_context_create($opts);

$gresults = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $gcontents);

$jsonresults = json_decode($gresults); 			

if ($jsonresults->{'success'}===false ) {  
	// the code was incorrect  
   	print "<font color=\"red\">Ошибка: введен неправильный проверочный код капчи!</font><br /><br />";
} 
else if ($jsonresults->{'success'}=== true )
{

     echo "Все норм!";

}