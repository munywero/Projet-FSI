<?php

class CollineDAO {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addColline(Colline $colline) {
        $requete = $this->db->prepare("INSERT INTO colline SET id_colline=:id,nom_colline=:nom,id_commune=:id");
        $requete->bindValue("id", $colline->getId_colline(), PDO::PARAM_INT);
        $requete->bindValue("nom", $colline->getNom_colline());
        $requete->bindValue("id_commune", $colline->getId_commune());
        $requete->execute();
    }

    function updateColline(Colline $colline) {
        $requete = $this->db->prepare("UPDATE colline SET id_colline=:id,nom_colline=:nom ,id_commune=:id WHERE id_colline=:id");
        $requete->bindValue("id", $colline->getId_colline(), PDO::PARAM_INT);
        $requete->bindValue("nom", $colline->getNom_colline());
        $requete->bindValue("id_commune", $colline->getId_commune());

        $requete->execute();
    }

    function deleteColline(Colline $colline) {
        $this->db->exec("DELETE FROM colline WHERE id_colline = " . $colline->getId_colline());
    }

    function getColline($id) {
        $query = $this->db->query("SELECT * FROM colline WHERE id_colline = " . $id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if ($donnees) {
            return new Colline($donnees);
        }
        return null;
    }

    function getListColline() {
        $list = array();
        $query = $this->db->query("SELECT * FROM colline ");
        while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Colline($donnees);
        }
        return $list;
    }

}
