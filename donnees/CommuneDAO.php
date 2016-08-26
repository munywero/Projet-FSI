<?php

class CommuneDAO {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addCommune(Commune $commune) {
        $requete = $this->db->prepare("INSERT INTO commune SET id_commune=:id,nom_commune=:nom");
        $requete->bindValue("id", $commune->getId_commune(), PDO::PARAM_INT);
        $requete->bindValue("nom", $commune->getNom_commune());
        $requete->bindValue("id_province", $commune->getId_province());
        $requete->execute();
    }

    function updateCommune(Commune $commune) {
        $requete = $this->db->prepare("UPDATE commune SET id_commune=:id,nom_commune=:nom WHERE id_commune=:id");
        $requete->bindValue("id", $commune->getId_commune(), PDO::PARAM_INT);
        $requete->bindValue("nom", $commune->getNom_province());
        $requete->bindValue("id_province", $commune->getId_province());
        $requete->execute();
    }

    function deleteProvince(Commune $commune) {
        $this->db->exec("DELETE FROM commune WHERE id_commune = " . $commune->getId_commune());
    }

    function getCommune($id) {
        $query = $this->db->query("SELECT * FROM commune WHERE id_commune = " . $id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if ($donnees) {
            return new Commune($donnees);
        }
        return null;
    }

    function getListCommune() {
        $list = array();
        $query = $this->db->query("SELECT * FROM commune ");
        while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Commune($donnees);
        }
        return $list;
    }

}
