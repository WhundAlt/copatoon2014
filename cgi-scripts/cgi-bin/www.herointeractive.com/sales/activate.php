<?php
function decrypt($ciphertext) {
	$ciphertext = hex2bin($ciphertext);
	$original_plaintext = openssl_decrypt($ciphertext, 'aes-128-ecb', 'zv3TayWxuyHCpRHw', OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING);
	return $original_plaintext;
}

$data = $_GET['strKey'];
$data = trim(decrypt($data));
list($key, $savevalue) = explode('-', $data);
$savevalue = round(sqrt($savevalue * ($savevalue * 1.24)) * 1.47);
header('Content-Type: application/xml');
echo '<data intValue="' . $savevalue . '"></data>';
?>