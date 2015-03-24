<?php
if( isset($_POST['name']) )
{
	function stringue($text) {
	$replace = str_replace("ü","&uuml;",$text);
	$replace = str_replace("ä","&auml;",$replace);
	$replace = str_replace("ö","&ouml;",$replace);
	return $replace;
	}
	
	$to = 'sales@ffnw.de'; // Replace with your email
	$subject = 'Anfrage Routerkauf'; // Replace with your subject if you need
	$message = 'Name: ' . stringue($_POST['name']) . "\n" .
						 'Vorname: ' . stringue($_POST['vorname']). "\n" .
						 'E-mail: ' . stringue($_POST['email']). "\n" .
						 'Adresse: ' . stringue($_POST['adresse']). "\n" .
						 'Ort: ' . stringue($_POST['ort']). "\n" .
						 'Telefon: ' . stringue($_POST['telefon']). "\n" .
						 'Router: ' . stringue($_POST['router']). "\n" .
						 'Anzahl: ' . stringue($_POST['menge']). "\n" .
						 'Abholung/Versand: ' . stringue($_POST['abholung']). "\n" .
						 'Kommentar: ' . stringue($_POST['comment']). "\n\n\n";
  
  
  // Get a random 32 bit number.
  $num = md5(time());  
  
  // Define the main headers.
  $headers .= 'From: ' . $to . "\r\n";
  $headers .= 'Reply-To:' . $_POST['email'] . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; ";
  $headers .= "boundary=$num\r\n";
  $headers .= "--$num\r\n";  
  
  // Define the message section
	$headers .= "Content-Type: text/plain\r\n";
	$headers .= "Content-Transfer-Encoding:8bit\r\n\n";
	$headers .= "$message\r\n";
	$headers .= "--$num\r\n";
	
	if( isset($_FILES['file']['tmp_name']) )
	{
		// Read the file into a variable
		$file = fopen($_FILES['file']['tmp_name'], 'r');
	  $size = $_FILES['file']['size'];
	  $content = fread($file, $size);
	  $encoded_content = chunk_split(base64_encode($content));		
		
		// Define the attachment section
		$headers .= "Content-Type: ". $_FILES['file']['type'] ."; ";
		$headers .= 'name="' . $_FILES['file']['name'] . '"' . "\r\n";
		$headers .= "Content-Transfer-Encoding: base64\r\n";
		$headers .= "Content-Disposition: attachment; ";
		$headers .= 'filename="' . $_FILES['file']['name'] . '"' . "\r\n\n";
		$headers .= "$encoded_content\r\n";
		$headers .= "--$num--";
	}
		
	// Send email
	mail ($to, $subject, '', $headers);
}
?>