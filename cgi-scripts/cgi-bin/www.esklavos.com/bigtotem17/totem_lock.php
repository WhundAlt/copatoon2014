<?php

	$preguntas = array("xhsgwtpaq19g4j","g5l4ugjt0whb40","8vjrta21o6lmt4","9s5fgt04ky810s","8fh4j6916dt453","19fy57d83ht65b","19h563jgpixzq3","17fht56so96jwl","paparulo","relocopancho","elquemado2","uncodigoloco","amanecer24horas","estacionlocura");
	$respuestas = array("minimoto321","lacamionetadepancho","salirdecompras","elgrantotem","siyosupieraquecosa","matadordebsas","quilodeplumasya","insospechadorato","esasi2","monteagudo25","pachangaya","rompeletesoleado","aporrearahora","pimpollosgordos");

	$addObject = $_REQUEST['add_object'];
	
	$index = array_search($addObject, $preguntas);
	$answer = $respuestas[$index];
	
	echo 'mensaje=' . $answer . '&mensaje3=' . $addObject . '&';