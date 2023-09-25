<?php 

class Entreprise

{
    private $bdd;

    public function __construct($bdd)

    {
        $this->bdd = $bdd;
    }

    public function ajouterEntreprise($nom, $siret, $adresse, $ntel, $specialite, $nbemploye, $pole)

    {
        $req = $this->bdd->prepare("INSERT INTO entreprise(nom, siret, adresse, ntel, specialite, nbemploye, pole) VALUES (:nom, :siret, :adresse, :ntel, :specialite, :nbemploye, :pole) ");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':siret',$siret);
        $req->bindParam(':adresse',$adresse);
        $req->bindParam(':ntel', $ntel);
        $req->bindParam(':specialite', $specialite);
        $req->bindParam(':nbemploye', $nbemploye);
        $req->bindParam(':pole', $pole);
        return $req->execute();
    }

    public function allEntreprise()
    {
        $req = $this->bdd->prepare("SELECT * FROM entreprise");
        $req->execute();
        return $req->fetchAll();
    }

    public function supprimerEntreprise($id)
    {
        $req = $this->bdd->prepare("DELETE FROM entreprise WHERE id = ?");
        return $req->execute ([$id]);
    }

    public function updateEntreprise($nom, $siret, $adresse, $ntel, $specialite, $nbemploye, $pole, $id)
    {
        $stmt = $this->bdd->prepare("UPDATE entreprise SET nom = :nom, siret = :siret, adresse = :adresse, ntel = :ntel, specialite = :specialite, nbemploye = :nbemploye, pole = :pole WHERE id = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':siret', $siret);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':ntel', $ntel);
        $stmt->bindParam(':specialite', $specialite);
        $stmt->bindParam(':nbemploye', $nbemploye);
        $stmt->bindParam(':pole', $pole);
        $stmt->bindParam(':id', $id);
        return $stmt->execute;
    }

    public function getById($id)
    {
        $stmt = $this->bdd->prepare('SELECT * FROM entreprise WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


}

?>