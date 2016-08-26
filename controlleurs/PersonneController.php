<?php

class PersonneController {
   
 private $dao;
    
    function __construct(PersonneDao $dao) {
        $this->dao = $dao;
    }

    
    function add(){
        
        require '/../vues/personne/add.php';
    }
    
    function update(){
        
        require '/../vues/personne/update.php';
    }
    
    function liste(){
        
        //$province =  $this->dao->getListProvince();
        require '/../vues/personne/list.php';
    }
    
    function view(){
        
        require '/../vues/personne/view.php';
    }
}
