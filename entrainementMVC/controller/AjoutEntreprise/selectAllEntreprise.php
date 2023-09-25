<?php

	include('../../bdd/bdd.php');
	include('../../model/entreprise_model.php');
	
$entreprise = new Entreprise($bdd);
$allEntreprise = $entreprise->AllEntreprise();

?>