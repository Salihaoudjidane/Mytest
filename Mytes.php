<?php

$min = 10;

$max = 50;
require_once"route.php"

route('/',function(){

	rand($min,$max);
})

route('/ValeurNonCorrecte', function(){


	if (route() >15) {
	
	return " Valeur non correcte";

	}
	
})

?>