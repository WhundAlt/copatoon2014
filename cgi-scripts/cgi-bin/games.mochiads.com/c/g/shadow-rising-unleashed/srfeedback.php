<?
if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message'])) {
	$to = 'shadowrising@cerebralfix.com';
	$from = $_POST['name'];
	$subject = $_POST['subject'];
	$body = $_POST['message'];
	$body = wordwrap($body, 70);

	mail($to, $subject, $body, $from);
}
?>