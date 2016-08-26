<?php

class Colline extends Objet{

    private $id_colline;
    private $nom_colline;
    private $id_commune;

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    function getId_colline() {
        return $this->id_colline;
    }

    function getNom_colline() {
        return $this->nom_colline;
    }

    function getId_commune() {
        return $this->id_commune;
    }

    function setId_colline($id_colline) {
        $this->id_colline = $id_colline;
    }

    function setNom_colline($nom_colline) {
        $this->nom_colline = $nom_colline;
    }

    function setId_commune($id_commune) {
        $this->id_commune = $id_commune;
    }

}
