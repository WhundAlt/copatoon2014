<?
// current time + some fake accuracy to match accuracy from time.gov
$currentTime = time() * 1000000
echo '<timestamp time="' . $currentTime . '" delay="' . $currentTime . '"/>'
?>