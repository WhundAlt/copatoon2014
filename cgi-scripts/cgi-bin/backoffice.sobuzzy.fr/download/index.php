<?php
if (isset($_GET['path'])) {
	header('Location: http://www.sobuzzy.fr/clients/dassault-aviation/' . $_GET['path']);
	exit;
}
?>