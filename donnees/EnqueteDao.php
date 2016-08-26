<?php

class EnqueteDao {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addEnquete(EnqueteDao $enquete) {
        $requete = $this->db->prepare("INSERT INTO enquete SET id_enquete=:id,id_personne=:id,id_indicateur=:id,id_utilisateur=:id,date_enquete=:date");
        $requete->bindValue("id", $enquete->getId_enquete(), PDO::PARAM_INT);
        $requete->bindValue("id", $enquete->getId_personne());
        $requete->bindValue("id", $enquete->getId_indicateur());
        $requete->bindValue("id", $enquete->getId_utilisateur());
        $requete->bindValue("date", $enquete->getDate_enquete());
        $requete->execute();
    }

    function updateEnquete(Enquete $enquete) {
        $requete = $this->db->prepare("UPDATE enquete SET id_enquete=:id,id_personne=:id,id_indicateur=:id,id_utilisateur=:id,date_enquete=:date");
        $requete->bindValue("id", $enquete->getId_enquete(), PDO::PARAM_INT);
        $requete->bindValue("id", $enquete->getId_personne());
        $requete->bindValue("id", $enquete->getId_indicateur());
        $requete->bindValue("id", $enquete->getId_utilisateur());
        $requete->bindValue("date", $enquete->getDate_enquete());
        $requete->execute();
    }

}

function deleteEnquete(Enquete $enquete) {
    $this->db->exec("DELETE FROM enquete WHERE id_enquete = " . $enquete->getId_enquete());
}

function getEnquete($id) {
    $query = $this->db->query("SELECT * FROM enquete WHERE id_enquete = " . $id);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    if ($donnees) {
        return new Enquete($donnees);
    }
    return null;
}

function getListEnquete() {
    $list = array();
    $query = $this->db->query("SELECT * FROM enquete ");
    while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
        $list[] = new Enquete($donnees);
    }
    return $list;
}
