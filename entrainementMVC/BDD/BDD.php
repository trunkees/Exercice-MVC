<?php
	try {
		$user = 'root';
		$mdp = '';
		$bdd = new PDO('mysql:host=localhost;dbname=ExoMVC', $user, $mdp);
		/* on stock dans la variable BDD toute la bibliotheque de fonction existant dans new PDO c'est grace à newPDO(...) que l'on peut acceder a notre base de données indiqué dans la parenthese */

	} catch (PDOException $e) {
		print "Erreur !" .$e->getMessage();
		die();
	}
	
?>