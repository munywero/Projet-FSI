<?php

class ManageDAO {

    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    function addManage(Manage $manage) {
        $requete = $this->db->prepare("INSERT INTO manage SET id_manage=:id,numero=:nom,id_colline=:id");
        $requete->bindValue("id", $manage->getId_manage(), PDO::PARAM_INT);
        $requete->bindValue("numero", $manage->getNumero());
        $requete->bindValue("id_colline", $manage->getId_colline());
        $requete->execute();
    }

    function updateManage(Manage $manage) {
        $requete = $this->db->prepare("UPDATE manage SET id_manage=:id,numero=:nom ,id_colline=:id WHERE id_cmanage=:id");
        $requete->bindValue("id", $manage->getId_manage(), PDO::PARAM_INT);
        $requete->bindValue("numero", $manage->getNumero());
        $requete->bindValue("id_commune", $manage->getId_colline());

        $requete->execute();
    }

    function deleteManage(Manage $manage) {
        $this->db->exec("DELETE FROM manage WHERE id_manage = " . $manage->getId_manage());
    }

    function getManage($id) {
        $query = $this->db->query("SELECT * FROM manage WHERE id_manage = " . $id);
        $donnees = $query->fetch(PDO::FETCH_ASSOC);
        if ($donnees) {
            return new Manage($donnees);
        }
        return null;
    }

    function getListColline() {
        $list = array();
        $query = $this->db->query("SELECT * FROM manage ");
        while ($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $list[] = new manage($donnees);
        }
        return $list;
    }

}
