<?php

class PersonneDao {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addPersonne(Personne $personne) {
        $requete = $this->db->prepare("INSERT INTO personne SET id_personne=:id,nom_personne=:nom,prenom_personne=:prenom,genre=:genre,date_naissance=:date,id_menage=:id");
        $requete->bindValue("id", $personne->getId_personne(), PDO::PARAM_INT);
        $requete->bindValue("nom", $personne->getNom_personne());
        $requete->bindValue("prenom", $personne->getPrenom_personne());
        $requete->bindValue("genre", $personne->getGenre());
        $requete->bindValue("date_naissance", $personne->getDate_naissance());
        $requete->bindValue("id_menage", $personne->getId_manage());
        $requete->execute();
    }

    function updatePersonne(Personne $personne) {
        $requete = $this->db->prepare("UPDATE personne SET id_personne=:id,nom_personne=:nom,prenom_personne=:prenom,genre=:genre,date_naissance=:date,id_menage=:id");
        $requete->bindValue("id", $personne->getId_personne(), PDO::PARAM_INT);
        $requete->bindValue("nom", $personne->getNom_personne());
        $requete->bindValue("prenom", $personne->getPrenom_personne());
        $requete->bindValue("genre", $personne->getGenre());
        $requete->bindValue("date", $personne->getDate_naissance());
        $requete->bindValue("id_menage", $personne->getId_manage());
        $requete->execute();
    }

    function deletePersonne(Personne $personne) {
        $this->db->exec("DELETE FROM personne WHERE id_personne = " . $personne->getId_personne());
    }

    function getPersonne($id) {
        $query = $this->db->query("SELECT * FROM personne WHERE id_personne = " . $id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if ($donnees) {
            return new Personne($donnees);
        }
        return null;
    }

    function getListPersonne() {
        $list = array();
        $query = $this->db->query("SELECT * FROM personne ");
        while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new Personne($donnees);
        }
        return $list;
    }

}
