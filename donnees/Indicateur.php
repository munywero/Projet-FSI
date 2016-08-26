<?php

class Indicateur extends Objet {
    private $id_indicateur;
    private $nom_indicateur;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    function getId_indicateur() {
        return $this->id_indicateur;
    }

    function getNom_indicateur() {
        return $this->nom_indicateur;
    }

    function setId_indicateur($id_indicateur) {
        $this->id_indicateur = $id_indicateur;
    }

    function setNom_indicateur($nom_indicateur) {
        $this->nom_indicateur = $nom_indicateur;
    }


    
    
}
