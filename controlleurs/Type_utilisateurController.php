<?php


class Type_utilisateurController {
  
 private $dao;
    
    function __construct(type_utilisateurDao $dao) {
        $this->dao = $dao;
    }

    
    function add(){
        
        require '/../vues/type_utilisateur/add.php';
    }
    
    function update(){
        
        require '/../vues/type_utilisateur/update.php';
    }
    
    function liste(){
        
        //$province =  $this->dao->getListProvince();
        require '/../vues/type_utilisateur/list.php';
    }
    
    function view(){
        
        require '/../vues/type_utilisateur/view.php';
    }
}
