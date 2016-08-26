<?php

class Utilisateur extends Objet {

    private $id_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $id_province;
    private $id_superviseur;
    private $id_type_utilisateur;

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    function getId_utilisateur() {
        return $this->id_utilisateur;
    }

    function getNom_utilisateur() {
        return $this->nom_utilisateur;
    }

    function getPrenom_utilisateur() {
        return $this->prenom_utilisateur;
    }

    function getId_province() {
        return $this->id_province;
    }

    function getId_superviseur() {
        return $this->id_superviseur;
    }

    function getId_type_utilisateur() {
        return $this->id_type_utilisateur;
    }

    function setId_utilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    function setNom_utilisateur($nom_utilisateur) {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    function setPrenom_utilisateur($prenom_utilisateur) {
        $this->prenom_utilisateur = $prenom_utilisateur;
    }

    function setId_province($id_province) {
        $this->id_province = $id_province;
    }

    function setId_superviseur($id_superviseur) {
        $this->id_superviseur = $id_superviseur;
    }

    function setId_type_utilisateur($id_type_utilisateur) {
        $this->id_type_utilisateur = $id_type_utilisateur;
    }

}
