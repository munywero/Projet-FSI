<?php

class type_utilisateurDao {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addType_tilisateur(Type_utilisateur $type_utilisateur) {
        $requete = $this->db->prepare("INSERT INTO type_utilisateur SET id_type_utilisateur=:id,type_utilisateur=:utilisateur,description=:description");
        $requete->bindValue("id", $type_utilisateur->getId_type_utilisateur(), PDO::PARAM_INT);
        $requete->bindValue("utilisateur", $type_utilisateur->getType_utilisateur());
        $requete->bindValue("description", $type_utilisateur->getDescription());
        $requete->execute();
    }

    function updateType_tilisateur(type_utilisateur $type_utilisateur) {
        $requete = $this->db->prepare("UPDATE personne SET id_type_utilisateur=:id,type_utilisateur=:utilisateur,description=:description");
        $requete->bindValue("id", $type_utilisateur->getId_type_utilisateur(), PDO::PARAM_INT);
        $requete->bindValue("utilisateur", $type_utilisateur->getType_utilisateur());
        $requete->bindValue("description", $type_utilisateur->getDescription());
        $requete->execute();
    }

}

function deleteType_tilisateur(type_utilisateur $type_utilisateur) {
    $this->db->exec("DELETE FROM personne WHERE id_type_utilisateur = " . $type_utilisateur->getId_type_utilisateur());
}

function getType_tilisateur($id) {
    $query = $this->db->query("SELECT * FROM type_utilisateur WHERE id_type_utilisateur = " . $id);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    if ($donnees) {
        return new type_utilisateur($donnees);
    }
    return null;
}

function getListType_utilisateur() {
    $list = array();
    $query = $this->db->query("SELECT * FROM type_utilisateur ");
    while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
        $list[] = new type_utilisateur($donnees);
    }
    return $list;
}
