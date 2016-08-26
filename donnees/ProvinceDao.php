<?php

class ProvinceDao {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addProvince(Province $province) {
        $requete = $this->db->prepare("INSERT INTO province SET id_province=:id,nom_province=:nom");
        $requete->bindValue("id", $province->getId_province(), PDO::PARAM_INT);
        $requete->bindValue("nom", $province->getNom_province());
        $requete->execute();
    }

    function updateProvince(Province $province) {
        $requete = $this->db->prepare("UPDATE province SET id_province=:id,nom_province=:nom WHERE id_province=:id");
        $requete->bindValue("id", $province->getId_province(), PDO::PARAM_INT);
        $requete->bindValue("nom", $province->getNom_province());
        $requete->execute();
    }

    function deleteProvince(Province $province) {
        $this->db->exec("DELETE FROM province WHERE id_province = ".$province->getId_province());
    }

    function getProvince($id) {
        $query = $this->db->query("SELECT * FROM province WHERE id_province = ".$id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if($donnees){
            return new Province($donnees);
        }
        return null;
    }

    function getListProvince() {
        $list = array();
        $query = $this->db->query("SELECT * FROM province ");
        while($donnees = $query->fetch(PDO::FETCH_ASSOC)){
            $list[] = new Province($donnees);
        }       
        return $list;
    }

}
