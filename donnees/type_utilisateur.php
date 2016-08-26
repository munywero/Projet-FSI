<?php

class type_utilisateur extends Objet {

    private $id_type_utilisateur;
    private $type_utilisateur;
    private $description;

    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    function getId_type_utilisateur(array $donnees) {
        $this->hydrate($donnees);
    }

    function getType_utilisateur() {
        return $this->type_utilisateur;
    }

    function getDescription() {
        return $this->description;
    }

    function setId_type_utilisateur($id_type_utilisateur) {
        $this->id_type_utilisateur = $id_type_utilisateur;
    }

    function setType_utilisateur($type_utilisateur) {
        $this->type_utilisateur = $type_utilisateur;
    }

    function setDescription($description) {
        $this->description = $description;
    }

}
