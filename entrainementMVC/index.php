<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entrainement MVC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">
</head>
<body>


<!-- Navbar -->
	<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	    <div class="boxed-page">
	        <nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="/"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="lnr lnr-menu"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbar-nav-header">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:16px" href="index.php">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:16px" href="view/tableau/tableau.php">Tableau</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<!-- End of Navbar -->

<section id="gtco-features" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <!-- End of Section Title -->
                <div class="row">
                    <!-- Projet Pro -->
                    <div class="col-md-12 features-holder text-center">
                        <h3>Formulaire entreprise</h3><br>
                        <div class="content-element">
                            <div class="content-ligne">
                                <div class="content-text-left">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="content-img-right">
                                    <img src="img/effeilimg.jpg" class="img-right">
                                </div>
                            </div>
                            <div class="content-ligne">
                                <div class="content-img-left">
                                    <img src="img/arcimg.jpg" class="img-left">
                                </div>
                                <div class="content-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="separation-element" style="outline: none;"></div>
                        </div>
                    </div>
                    <!-- End of Projet Pro -->

<div class="formentreprise">
    <div class="container mt-4">
        <h2 style="text-align:center;" class="titreform">Ajouter une Entreprise</h2>
        <br>
        <form method="POST" action="controller/AjoutEntreprise/ajout_entreprise_controller.php">
            <div class="form-group">
                <label for="nom">Nom de l'entreprise</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="siret">SIRET</label>
                <input type="text" class="form-control" id="siret" name="siret" pattern="[0-9]{14}" title="Le SIRET doit contenir 14 chiffres" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="ntel">Numéro de Téléphone</label>
                <input type="text" class="form-control" id="ntel" name="ntel" pattern="[0-9]{10}" title="Le numéro de téléphone doit contenir 10 chiffres" required>
            </div>
            <div class="form-group">
                <label for="specialite">Spécialité</label>
                <input type="text" class="form-control" id="specialite" name="specialite" required>
            </div>
            <div class="form-group">
                <label for="nbemploye">Nombre d'Employés</label>
                <input type="number" class="form-control" id="nbemploye" name="nbemploye" min="0" required>
            </div>
            <div class="form-group">
                <label for="pole">Pole</label>
                <input type="text" class="form-control" id="pole" name="pole" required>
            </div><br>
            <button type="submit" class="button center-button">Ajouter</button>
        </form>
    </div>
</div>

</body>
</html>