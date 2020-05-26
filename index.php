<?php
	header( 'Content-type: text/html;charset=utf-8' );

	define( 'RETOUR_OK' , '1' );
	define( 'RETOUR_KO' , '0' );
	define( 'RETOUR_ERR' , '-1' );

	try {
		$mysqli = new mysqli('localhost','root','','pokedex');
		$connected = true;
	} catch (mysqli_sql_exception $e) {
		throw $e;
	}

	include( 'controller/primaire.php' );
	include( 'controller/controller.interface.php' );
	include( 'controller/cont.php' );
	
	$pokemon = new primaire();