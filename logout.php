<?php
	//on demarre la sesson
	session_start();
	// on detruit les variables de notre session
	session_unset();
	// on detruit notre session
	session_destroy();
	//on redirige le visiteur vers la page d'accueil
	header('location:index.php');
?>