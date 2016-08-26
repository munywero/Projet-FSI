<?php

class Province extends Objet{
    private $id_province;
    private $nom_province;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    function getId_province() {
        return $this->id_province;
    }

    function getNom_province() {
        return $this->nom_province;
    }

    function setId_province($id_province) {
        $this->id_province = $id_province;
    }

    function setNom_province($nom_province) {
        $this->nom_province = $nom_province;
    }

    
}
