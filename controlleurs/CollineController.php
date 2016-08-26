<?php

class CollineController {

    private $dao;

    function __construct(CollineDao $dao) {
        $this->dao = $dao;
    }

    function add() {

        require '/../vues/colline/add.php';
    }

    function update() {

        require '/../vues/colline/update.php';
    }

    function liste() {

        //$province =  $this->dao->getListProvince();
        require '/../vues/colline/list.php';
    }

    function view() {

        require '/../vues/colline/view.php';
    }

}
