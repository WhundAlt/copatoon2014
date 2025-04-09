<?php

require dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

$config = new Amfphp_Core_Config();
$voFolders = array(dirname(__FILE__) . '/vo/');
$config->pluginsConfig['AmfphpVoConverter'] = array('voFolders' => $voFolders);
$config->serviceFolders = array(dirname(__FILE__) . '/service/');
$gateway = Amfphp_Core_HttpRequestGatewayFactory::createGateway($config);
$gateway->service();
$gateway->output();
