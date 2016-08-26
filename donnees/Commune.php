<?php


class Commune extends Objet{
   private $id_commune;
    private $nom_commune;
    private $id_province;
    
    function __construct(array $donnees) {
         $this->hydrate($donnees);
    }

    
    function getId_commune() {
        return $this->id_commune;
    }

    function getNom_commune() {
        return $this->nom_commune;
    }

    function getId_province() {
        return $this->id_province;
    }
    function setId_commune($id_commune) {
        $this->id_commune = $id_commune;
    }

    function setNom_commune($nom_commune) {
        $this->nom_commune = $nom_commune;
    }

    function setId_province($id_province) {
        $this->id_province = $id_province;
    }


  
    
}
