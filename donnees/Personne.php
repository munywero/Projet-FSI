<?php

class Personne extends Objet {

    private $id_personne;
    private $nom_personne;
    private $prenom_personne;
    private $genre;
    private $date_naissance;
    private $id_manage;

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    function getId_personne() {
        return $this->id_personne;
    }

    function getNom_personne() {
        return $this->nom_personne;
    }

    function getPrenom_personne() {
        return $this->prenom_personne;
    }

    function getGenre() {
        return $this->genre;
    }

    function getDate_naissance() {
        return $this->date_naissance;
    }

    function getId_manage() {
        return $this->id_manage;
    }

    function setId_personne($id_personne) {
        $this->id_personne = $id_personne;
    }

    function setNom_personne($nom_personne) {
        $this->nom_personne = $nom_personne;
    }

    function setPrenom_personne($prenom_personne) {
        $this->prenom_personne = $prenom_personne;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    function setId_manage($id_manage) {
        $this->id_manage = $id_manage;
    }

}
