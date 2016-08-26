<?php

class UtilisateurDao {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addUtilisateurs(Utilisateur $utilisateur) {
        $requete = $this->db->prepare("INSERT INTO utilisateur SET id_utilisateur=:id,nom_utilisateur=:nom,prenom_utilisateur=:prenom,id_province=:id,id_superviseur=:id,id_type_utilisateur=:id");
        $requete->bindValue("id", $utilisateur->getId_utilisateur(), PDO::PARAM_INT);
        $requete->bindValue("nom", $utilisateur->getNom_utilisateur());
        $requete->bindValue("prenom", $utilisateur->getPrenom_utilisateur());
        $requete->bindValue("id_province", $utilisateur->getId_province());
        $requete->bindValue("id_superviseur", $utilisateur->getId_superviseur());
        $requete->bindValue("id_type_utilisateur", $utilisateur->getId_type_utilisateur());
        $requete->execute();
    }

    function updateUtilisateurs(Utilisateur $utilisateur) {
        $requete = $this->db->prepare("UPDATE personne SET id_utilisateur=:id,nom_utilisateur=:nom,prenom_utilisateur=:prenom,id_province=:id,id_superviseur=:id,id_type_utilisateur=:id");
        $requete->bindValue("id", $utilisateur->getId_personne(), PDO::PARAM_INT);
        $requete->bindValue("nom", $utilisateur->getNom_personne());
        $requete->bindValue("prenom", $utilisateur->getPrenom_personne());
        $requete->bindValue("genre", $utilisateur->getGenre());
        $requete->bindValue("date_naissance", $utilisateur->getDate_naissance());
        $requete->bindValue("id_menage", $utilisateur->getId_manage());
        $requete->execute();
    }

}

function deleteUtilisateurs(Utilisateur $utilisateur) {
    $this->db->exec("DELETE FROM personne WHERE id_personne = " . $utilisateur->getId_utilisateur());
}

function getUtilisateurs($id) {
    $query = $this->db->query("SELECT * FROM utilisateurs WHERE id_utilisateur = " . $id);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    if ($donnees) {
        return new Utilisateur($donnees);
    }
    return null;
}

function getListUtilisateurs() {
    $list = array();
    $query = $this->db->query("SELECT * FROM personne ");
    while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
        $list[] = new Utilisateur($donnees);
    }
    return $list;
}
