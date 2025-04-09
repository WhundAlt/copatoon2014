<?php
  $dir=dirname(__FILE__) ;
  chdir($dir);
  if( $_REQUEST["action"]=="getacceptedlevels"){
   $file =file_get_contents("alllevels.xml");
   echo $file;}
  if( $_REQUEST["action"]=="getcustomlevel"){//action=getcustomlevel&id=2969
   $f="levels/".$_REQUEST["id"].".xml";
   $file =file_get_contents($f);
   echo $file;
   }
?>