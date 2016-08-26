<?php


class IndicateurDAO {
 private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addIndicateur(Indicateur $indicateur) {
        $requete = $this->db->prepare("INSERT INTO indicateur SET id_indicateur=:id,nom_indicateur=:nom");
        $requete->bindValue("id", $indicateur->getId_indicateur(), PDO::PARAM_INT);
        $requete->bindValue("nom", $indicateur->getNom_indicateur());
        $requete->execute();
    }

    function updateIndicateur(Indicateur $indicateur) {
        $requete = $this->db->prepare("UPDATE indicateur SET id_indicateur=:id,nom_indicateur=:nom WHERE id_indicateur=:id");
        $requete->bindValue("id", $indicateur->getId_indicateur(), PDO::PARAM_INT);
        $requete->bindValue("nom", $indicateur->getNom_indicateur());
        $requete->execute();
    }

    function deleteIndicateur(Indicateur $indicateur) {
        $this->db->exec("DELETE FROM indicateur WHERE id_indicateur = ".$indicateur->getId_indicateur());
    }

    function getIndicateur($id) {
        $query = $this->db->query("SELECT * FROM indicateur WHERE id_indicateur = ".$id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if($donnees){
            return new Province($donnees);
        }
        return null;
    }

    function getListIndicateur() {
        $list = array();
        $query = $this->db->query("SELECT * FROM indicateur ");
        while($donnees = $query->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Province($donnees);
        }       
        return $list;
    }

}
