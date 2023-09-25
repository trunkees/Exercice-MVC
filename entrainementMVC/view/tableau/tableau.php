<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Entrainement MVC</title>

    <link rel="stylesheet" type="text/css"  href="../../css/style.css">
    <link rel="stylesheet" type="text/css"  href="../../vendor/bootstrap/bootstrap.min.css">

  </head>
  <body>
<?php include('../../Controller/AjoutEntreprise/selectAllEntreprise.php'); ?>    
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
                                <a class="nav-link" style="font-size:16px" href="../../index.php">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size:16px" href="../view/tableau/tableau.php">Tableau</a>
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
                        <h2>Voici le tableau des entreprises</h2><br>

        

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>SIRET</th>
                    <th>Adresse</th>
                    <th>Numéro de Téléphone</th>
                    <th>Spécialité</th>
                    <th>Nombre d'Employés</th>
                    <th>Pôle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allEntreprise as $entreprise) { ?>
                <tr>
                    <td><?php echo $entreprise['id']?></td>
                    <td><?php echo $entreprise['nom']?></td>
                    <td><?php echo $entreprise['siret']?></td>
                    <td><?php echo $entreprise['adresse']?></td>
                    <td><?php echo $entreprise['ntel']?></td>
                    <td><?php echo $entreprise['specialite']?></td>
                    <td><?php echo $entreprise['nbemploye']?></td>
                    <td><?php echo $entreprise['pole']?></td>
                </tr> <?php } ?>
            </tbody>
        </table>
    </div>
    <br><br><br>
        <a href="../../index.php" class="buttontabl"><button class="buttontabl">Ajouter une entreprise</button></a>

  </body>
</html>
