<?php

class ProvinceController {

    private $dao;

    function __construct(ProvinceDao $dao) {
        $this->dao = $dao;
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            require '/../vues/provinces/add.php';
        } else {
            if (isset($_POST["nom_province"])) {
                $this->dao->addProvince(new Province($_POST));
            }
        }
    }

    function update() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_GET["id"];
            $province = $this->dao->getProvince($id);
            require '/../vues/provinces/update.php';
        } else {
            if (isset($_POST["nom_province"])) {
                $this->dao->updateProvince(new Province($_POST));
            }
        }
    }

    function liste() {

        $provinces = $this->dao->getListProvince();
        require '/../vues/provinces/list.php';
    }

    function view() {
        $id = $_GET["id"];
        $province = $this->dao->getProvince($id);
        require '/../vues/provinces/view.php';
    }

}
