<?php
$root = $_SERVER['DOCUMENT_ROOT']; // htdocs
$parent = dirname($root); // parent of htdocs
require_once $parent . '/vendor/autoload.php';


// UNCOMMENT BELOW FOR DEBUGGING
/*
function wh_log($log_msg)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) 
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, PHP_EOL . $log_msg, FILE_APPEND);
}

function log_error($log_msg)
{
    $log_filename = "error";
    if (!file_exists($log_filename)) 
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log' . date('d-M-Y') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, PHP_EOL . $log_msg, FILE_APPEND);
}
function exception_handler($exception) {
    log_error($exception->getMessage());
}

set_exception_handler('exception_handler');

$headers = apache_request_headers();
wh_log('----------------------');
wh_log('Request headers:');
foreach ($headers as $header => $value) {
    wh_log("$header: $value");
}
wh_log('----------------------');
wh_log('Get headers:');
foreach($_GET as $key => $value)
{
    wh_log("$key: $value");
}
wh_log('----------------------');
wh_log('Post headers:');
foreach($_POST as $key => $value)
{
    wh_log("$key: $value");
}
wh_log('----------------------');
*/

/* Grab the incoming packet */
$postdata = file_get_contents("php://input");
// Deserialize it
$deserializer = new Amfphp_Core_Amf_Deserializer();
$deserialized = $deserializer->deserialize(array(), array(), $postdata);

// Loop over all messages, find the one we want
$numMessages = count($deserialized->messages);
for ($i = 0; $i < $numMessages; $i++) {
    $requestMessage = $deserialized->messages[$i];
    if($requestMessage->targetUri == "echo.echo") { // Echo service? Rename the targetUri since echo is a reserved keyword
       $requestMessage->targetUri = "myecho.tehecho";
    }
}

// Serialize the new message back
$serializer = new Amfphp_Core_Amf_Serializer();
$serialized = $serializer->serialize($deserialized);

// We need the content type in order set the correct headers
$contentType = null;
if(isset ($_GET['contentType'])){
    $contentType = $_GET['contentType'];
}else if(isset ($_SERVER['CONTENT_TYPE'])){
    $contentType = $_SERVER['CONTENT_TYPE'];
}

$config = new Amfphp_Core_Config();

// UNCOMMENT BELOW FOR DEBUGGING
//$config->disabledPlugins = [];

$config->serviceFolders = array(dirname(__FILE__) . '/Services/');
// Initialize the gateway! Yay
$gateway = new Amfphp_Core_Gateway($_GET, $_POST, $serialized, $contentType, $config);
$gateway->service();
$gateway->output();
?>