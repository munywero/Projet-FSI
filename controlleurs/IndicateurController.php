<?php


class IndicateurController {
    
 private $dao;
    
    function __construct(IndicateurDAO $dao) {
        $this->dao = $dao;
    }

    
    function add(){
        
        require '/../vues/indicateur/add.php';
    }
    
    function update(){
        
        require '/../vues/indicateur/update.php';
    }
    
    function liste(){
        
        //$province =  $this->dao->getListProvince();
        require '/../vues/indicateur/list.php';
    }
    
    function view(){
        
        require '/../vues/indicateur/view.php';
    }
}
