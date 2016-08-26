<?php


class Enquete extends Objet{
    private $id_enquete;
    private $id_personne;
    private $id_indicateur;
    private $id_utilisateur;
    private $date_enquete;
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    function getId_enquete() {
        return $this->id_enquete;
    }

    function getId_personne() {
        return $this->id_personne;
    }

    function getId_indicateur() {
        return $this->id_indicateur;
    }

    function getId_utilisateur() {
        return $this->id_utilisateur;
    }

    function getDate_enquete() {
        return $this->date_enquete;
    }

    function setId_enquete($id_enquete) {
        $this->id_enquete = $id_enquete;
    }

    function setId_personne($id_personne) {
        $this->id_personne = $id_personne;
    }

    function setId_indicateur($id_indicateur) {
        $this->id_indicateur = $id_indicateur;
    }

    function setId_utilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    function setDate_enquete($date_enquete) {
        $this->date_enquete = $date_enquete;
    }


    
}
