<?php

class UtilisateurController {

    private $dao;

    function __construct(UtilisateurDao $dao) {
        $this->dao = $dao;
    }

    function add() {

        require '/../vues/utilisateur/add.php';
    }

    function update() {

        require '/../vues/utilisateur/update.php';
    }

    function liste() {

        //$province =  $this->dao->getListProvince();
        require '/../vues/utilisateur/list.php';
    }

    function view() {

        require '/../vues/utilisateur/view.php';
    }

}
