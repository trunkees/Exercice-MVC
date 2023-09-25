<?php
    include('../../BDD/BDD.php');
    include('../../model/entreprise_model.php');
    

    var_dump($_POST);


    if (isset ($_POST['action'])) {
        $entrepriseController = new entrepriseController($bdd);

        switch ($_POST['action']) {
            
                    case 'ajouter':
                        $entrepriseController->create();
                        break;
                    case 'supprimer':
                        $entrepriseController->delete();
                        break;
                    case 'update':
                        $entrepriseController->update();
                        break;
                    default:
                        header('Location:http://localhost/entrainementMVC/view/tableau/tableau.php');
                        break;
        }
    }
    

    class EntrepriseController {
        private $entreprise;

        public function __construct($bdd) {
            $this->entreprise = new Entreprise($bdd);
        }

        public function create() {
            $this->entreprise->ajouterEntreprise($_POST['nom'], $_POST['siret'],  $_POST['adresse'], $_POST['ntel'], $_POST['specialite'], $_POST['nbemploye'], $_POST['pole']);
            header('Location:http://localhost/entrainementMVC/view/tableau/tableau.php');
        }

        public function delete() {
            $this->entreprise->supprimerEntreprise($_POST['deleteEntreprise']);
            header('Location:http://localhost/entrainementMVC/view/tableau/tableau.php');
        }

        public function update() {
            $this->entreprise->updateEntreprise($_POST['nom'], $_POST['siret'],  $_POST['adresse'], $_POST['ntel'], $_POST['specialite'], $_POST['nbemploye'], $_POST['pole'], $_POST['id']);
            header('Location:http://localhost/entrainementMVC/view/tableau/tableau.php');
        }
    } 


?>