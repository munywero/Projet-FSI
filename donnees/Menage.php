<?php

class Menage extends Objet {

    private $id_manage;
    private $numero;
    private $id_colline;
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
        
    }

    
    function getId_manage() {
        return $this->id_manage;
    }

    function getNumero() {
        return $this->numero;
    }

    function getId_colline() {
        return $this->id_colline;
    }

    function setId_manage($id_manage) {
        $this->id_manage = $id_manage;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setId_colline($id_colline) {
        $this->id_colline = $id_colline;
    }

}
