<?php

$route =[];

function route ($action,$callback){
	
	global $route;

	$route[$action]=$callback;

}

function Envoyer($action){
	
	global $route;

	$action= trim($action,'/');

	$callback = $route [$action];

	echo call_user_func($callback);
}

?>