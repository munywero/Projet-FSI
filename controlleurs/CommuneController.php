<?php

class CommuneController {

    private $dao;

    function __construct(CommuneDAO $dao) {
        $this->dao = $dao;
    }

    function add() {

        require '/../vues/commune/add.php';
    }

    function update() {

        require '/../vues/commune/update.php';
    }

    function liste() {

        //$province =  $this->dao->getListProvince();
        require '/../vues/commune/list.php';
    }

    function view() {

        require '/../vues/commune/view.php';
    }

}
