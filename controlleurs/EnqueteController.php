<?php

class EnqueteController {

    private $dao;

    function __construct(EnqueteDao $dao) {
        $this->dao = $dao;
    }

    function add() {

        require '/../vues/enquete/add.php';
    }

    function update() {

        require '/../vues/enquete/update.php';
    }

    function liste() {

        //$province =  $this->dao->getListProvince();
        require '/../vues/enquete/list.php';
    }

    function view() {

        require '/../vues/enquete/view.php';
    }

}
