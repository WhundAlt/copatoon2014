<?php
$fileatt = $_GET['file']; // Path to the file
$fileatt_type = "application/octet-stream"; // File Type
$fileatt_name = $_GET['filename']; // Filename that will be used for the file as the attachment
$email_from = $_GET['from']; // Who the email is from
$email_subject = $_GET['subject']; // The Subject of the email
$email_message = $_GET['messagetext']; // Message that the email has in it
$colordetails = $_GET['colordetails'];
$email_to = $_GET['to']; // Who the email is too

$headers = "From: ".$email_from;

$file = fopen($fileatt,'rb');
$data = fread($file,filesize($fileatt));
fclose($file);

$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";

$email_message .= "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
"<font face=\"verdana\" size=\"2\">$email_message</font>" .
"<table width=\"389\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">" .
"<tr>" .
"<td></td>" .
"</tr>" .
"<tr>" .
"<td>&nbsp;</td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#d79508\"><img src=\"http://127.0.0.1:4001/images/davies_top_email.jpg\" width=\"389\" height=\"100\" /></td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#d79508\"><img src=\"http://127.0.0.1:4001/$fileatt\" width=\"389\" height=\"293\" /></td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#d79508\"><img src=\"http://127.0.0.1:4001/images/davies_foot_email.jpg\" width=\"389\" height=\"18\" /></td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#3399CC\"></td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#3399CC\"><ul><font face=\"verdana\" size=\"1\">$colordetails</font></ul></td>" .
"</tr>" .
"<tr>" .
"<td bgcolor=\"#3399CC\"></td>" .
"</tr>" .
"<tr>" .
"<td><img src=\"http://127.0.0.1:4001/images/davies_footnote_email.jpg\" width=\"389\" height=\"55\" /></td>" .
"</tr>" .
"</table>" . "\n\n";
 

$data = chunk_split(base64_encode($data));

$email_message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatt_type};\n" .
" name=\"{$fileatt_name}\"\n" .
//"Content-Disposition: attachment;\n" .
//" filename=\"{$fileatt_name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}--\n";

mail($email_to, $email_subject, $email_message, $headers);
exit();

?>